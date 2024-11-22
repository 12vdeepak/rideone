<?php

namespace App\DataTables;

use App\Models\RideRequest;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

use App\Traits\DataTableTrait;

class RideRequestDataTable extends DataTable
{
    use DataTableTrait;
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('driver_id', function ($rideRequest) {
                return $rideRequest->driver_id != null ? optional($rideRequest->driver)->display_name : '';
            })
            ->editColumn('riderequest_in_driver_id', function ($rideRequest) {
                return $rideRequest->riderequest_in_driver_id != null ? optional($rideRequest->riderequest_in_driver)->display_name : '';
            })
            ->editColumn('rider_id', function ($rideRequest) {
                return $rideRequest->rider_id != null ? optional($rideRequest->rider)->display_name : '';
            })
            ->editColumn('payment_status', function ($rideRequest) {
                $status = 'warning';
                $payment_status = isset($rideRequest->payment) ? $rideRequest->payment->payment_status : __('message.pending');
    
                switch ($payment_status) {
                    case 'pending':
                        $status = 'warning';
                        break;
                    case 'failed':
                        $status = 'danger';
                        break;
                    case 'paid':
                        $status = 'success';
                        break;
                }
                return '<span class="text-capitalize badge bg-' . $status . '">' . $payment_status . '</span>';
            })
            ->editColumn('status', function ($rideRequest) {
                $status = 'primary';
                $ride_status = $rideRequest->status;
    
                switch ($ride_status) {
                    case 'pending':
                        $status = 'warning';
                        break;
                    case 'canceled':
                        $status = 'danger';
                        break;
                    case 'completed':
                        $status = 'success';
                        break;
                }
                return '<span class="badge bg-' . $status . '">' . __('message.' . $rideRequest->status) . '</span>';
            })
            ->addColumn('action', function ($rideRequest) {
                $actions = '';
                $auth_user = authSession(); 

                if($rideRequest->status == 'new_ride_requested')
                {
                    $actions .= '<a href="' . route('riderequest.cancel', $rideRequest->id) . '" class="btn btn-danger btn-sm mb-1">Cancel</a> ';

                }

               
    
                $actions .= '<a href="' . route('riderequest.show', $rideRequest->id) . '" class="btn btn-secondary btn-sm">View</a>';
                $actions .= '<a href="javascript:void(0)" data--submit="riderequest' . $rideRequest->id . '" 
                    data--confirmation="true" data-title="' . __('message.delete_form_title', ['form' => __('message.riderequest')]) . '"
                    title="' . __('message.delete_form_title', ['form' => __('message.riderequest')]) . '"
                    data-message="' . __("message.delete_msg") . '">
                    <i class="fas fa-trash-alt text-danger"></i></a>';
    
                return $actions;
            })
            ->rawColumns(['action', 'payment_status', 'status']);
    }
    

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\RideRequest $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $model = RideRequest::myRide()->orderBy('id','desc');

        if( $this->rider_id != null ) {
            $model = $model->where('rider_id',$this->rider_id);
        }
        return $this->applyScopes($model);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            // Column::make('DT_RowIndex')
            //     ->searchable(false)
            //     ->title(__('message.srno'))
            //     ->orderable(false)
            //     ->width(60),
            Column::make('id')->title( '#' ),
            Column::make('rider_id')->title( __('message.rider') ),
            Column::make('riderequest_in_driver_id')->title( __('message.requested_driver') ),
            Column::make('driver_id')->title( __('message.driver') ),
            Column::make('datetime')->title( __('message.datetime') ),
            // Column::make('total_amount')->title( __('message.total_amount') ),
            Column::make('payment_type')->title( __('message.payment_method') ),
            Column::make('payment_status')->title( __('message.payment') )->orderable(false),
            Column::make('status')->title( __('message.status') ),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'RideRequests_' . date('YmdHis');
    }
}
