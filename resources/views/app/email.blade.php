<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-lg-3">
               <div class="card">
                  <div class="card-body">
                     <div class="">
                        <div class="mm-email-list">
                           <button class="btn btn-primary btn-lg btn-block mb-3 font-size-16 p-3" data-target="#compose-email-popup" data-toggle="modal"><i class="ri-send-plane-line mr-2"></i>New Message</button>
                           <div class="mm-email-ui nav flex-column nav-pills">
                              <li class="nav-link active" role="tab" data-toggle="pill" href="#mail-inbox"><a href="#"><i class="ri-mail-line"></i>Inbox<span class="badge badge-primary ml-2">4</span></a></li>
                              <li class="nav-link" role="tab" data-toggle="pill" href="#mail-starred"><a href="#"><i class="ri-star-line"></i>Starred</a></li>
                              <li class="nav-link" role="tab" data-toggle="pill" href="#mail-snoozed"><a href="#"><i class="ri-time-line"></i>Snoozed</a></li>
                              <li class="nav-link" role="tab" data-toggle="pill" href="#mail-draft"><a href="#"><i class="ri-file-list-2-line"></i>Draft</a></li>
                              <li class="nav-link" role="tab" data-toggle="pill" href="#mail-sent"><a href="#"><i class="ri-mail-send-line"></i>Sent Mail</a></li>
                              <li class="nav-link" role="tab" data-toggle="pill" href="#mail-trash"><a href="#"><i class="ri-delete-bin-line"></i>Trash</a></li>
                              <li class="nav-link" role="tab" data-toggle="pill" href="#mail-important"><a href="#"><i class="ri-bookmark-line"></i>Important</a></li>
                              <li class="nav-link" role="tab" data-toggle="pill" href="#mail-spam"><a href="#"><i class="ri-spam-line"></i>Spam</a></li>
                           </div>
                           <h6 class="mt-4 mb-3">Labels</h6>
                           <ul class="mm-email-ui mm-email-label">
                              <li><a href="#"><i class="ri-focus-fill text-primary"></i>Personal</a></li>
                              <li><a href="#"><i class="ri-focus-fill text-danger"></i>Company</a></li>
                              <li><a href="#"><i class="ri-focus-fill text-success"></i>Important</a></li>
                              <li><a href="#"><i class="ri-focus-fill text-info"></i>Private</a></li>
                              <li><a href="#"><i class="ri-focus-fill text-warning"></i>Private</a></li>
                              <li><a href="#"><i class="ri-add-circle-line"></i>Add New Labels</a></li>
                           </ul>
                           <div class="mm-progress-bar-linear d-inline-block w-100">
                              <h6 class="mt-4 mb-3">Storage</h6>
                              <div class="mm-progress-bar">
                                 <span class="bg-danger" data-percent="90"></span>
                              </div>
                              <span class="mt-1 d-inline-block w-100">7.02 GB (46%) of 15 GB used</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-9 mail-box-detail">
               <div class="card">
                  <div class="card-body p-0">
                     <div class="">
                        <div class="mm-email-to-list p-3">
                           <div class="d-flex justify-content-between">
                              <ul>
                                 <li>
                                    <a href="#" id="navbarDropdown" data-toggle="dropdown">
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1"><i class="ri-arrow-down-s-line"></i></label>
                                       </div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="#">Action</a>
                                       <a class="dropdown-item" href="#">Another action</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                 </li>
                                 <li data-toggle="tooltip" data-placement="top" title="Reload"><a href="#"><i class="ri-restart-line"></i></a></li>
                                 <li data-toggle="tooltip" data-placement="top" title="Archive"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                 <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                 <li data-toggle="tooltip" data-placement="top" title="Inbox"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                 <li data-toggle="tooltip" data-placement="top" title="Zoom"><a href="#"><i class="ri-drag-move-2-line"></i></a></li>
                              </ul>
                              <div class="mm-email-search d-flex">
                                 <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search">
                                       <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                    </div>
                                 </form>
                                 <ul>
                                    <li class="mr-3">
                                       <a class="font-size-14" href="#" id="navbarDropdown" data-toggle="dropdown">
                                       1 - 50 of 505
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="#">20 per page</a>
                                          <a class="dropdown-item" href="#">50 per page</a>
                                          <a class="dropdown-item" href="#">100 per page</a>
                                       </div>
                                    </li>
                                    <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                    <li class="mr-0" data-toggle="tooltip" data-placement="top" title="Setting"><a href="#"><i class="ri-list-settings-line"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="mm-email-listbox">
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="mail-inbox" role="tabpanel">
                                 <ul class="mm-email-sender-list">
                                    <li class="mm-unread">
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk">
                                                   <label class="custom-control-label" for="mailk"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle text-warning"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@MackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@MackenzieBarryo - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">08:00 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0 mb-3">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk1">
                                                   <label class="custom-control-label" for="mailk1"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Deray Billings (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Megan Allen (@meganallen) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">08:15 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-2.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Deray Billings,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk2">
                                                   <label class="custom-control-label" for="mailk2"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Lauren Drury (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Dixa Horton (@dixahorton) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-3.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Lauren Drury,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk3">
                                                   <label class="custom-control-label" for="mailk3"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk4">
                                                   <label class="custom-control-label" for="mailk4"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre (@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li class="mm-unread">
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk5">
                                                   <label class="custom-control-label" for="mailk5"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle text-warning"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk6">
                                                   <label class="custom-control-label" for="mailk6"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 25, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk7">
                                                   <label class="custom-control-label" for="mailk7"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Deray Billings (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                       <div class="email-app-details">
                                          <div class="card">
                                             <div class="card-body p-0">
                                                <div class="">
                                                   <div class="mm-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="mm-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="mm-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="mm-inbox-subject-info">
                                                         <div class="mm-subject-info">
                                                            <img src={{URL::asset("images/user/user-2.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                            <div class="mm-subject-status align-self-center">
                                                               <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="mm-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>meettaxi@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="mm-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="mm-unread">
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk8">
                                                   <label class="custom-control-label" for="mailk8"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle text-warning"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Lauren Drury (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre (@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-3.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Lauren Drury,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk9">
                                                   <label class="custom-control-label" for="mailk9"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk10">
                                                   <label class="custom-control-label" for="mailk10"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk11">
                                                   <label class="custom-control-label" for="mailk11"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk12">
                                                   <label class="custom-control-label" for="mailk12"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk13">
                                                   <label class="custom-control-label" for="mailk13"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Deray Billings (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg(@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-2.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Deray Billings,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk14">
                                                   <label class="custom-control-label" for="mailk14"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Lauren Drury (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-3.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Lauren Drury,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk15">
                                                   <label class="custom-control-label" for="mailk15"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre(@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk16">
                                                   <label class="custom-control-label" for="mailk16"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk17">
                                                   <label class="custom-control-label" for="mailk17"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="mail-starred" role="tabpanel">
                                 <ul class="mm-email-sender-list">
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk2">
                                                   <label class="custom-control-label" for="mailk2"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Lauren Drury (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Dixa Horton (@dixahorton) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-3.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Lauren Drury,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk3">
                                                   <label class="custom-control-label" for="mailk3"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk4">
                                                   <label class="custom-control-label" for="mailk4"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre (@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li class="mm-unread">
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk5">
                                                   <label class="custom-control-label" for="mailk5"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle text-warning"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk6">
                                                   <label class="custom-control-label" for="mailk6"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 25, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="mail-snoozed" role="tabpanel">
                                 <ul class="mm-email-sender-list">
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk4">
                                                   <label class="custom-control-label" for="mailk4"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre (@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li class="mm-unread">
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk5">
                                                   <label class="custom-control-label" for="mailk5"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle text-warning"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk6">
                                                   <label class="custom-control-label" for="mailk6"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 25, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="mail-draft" role="tabpanel">
                                 <ul class="mm-email-sender-list">
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk9">
                                                   <label class="custom-control-label" for="mailk9"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk10">
                                                   <label class="custom-control-label" for="mailk10"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk11">
                                                   <label class="custom-control-label" for="mailk11"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk12">
                                                   <label class="custom-control-label" for="mailk12"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk13">
                                                   <label class="custom-control-label" for="mailk13"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Deray Billings (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg(@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-2.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Deray Billings,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="mail-sent" role="tabpanel">
                                 <ul class="mm-email-sender-list">
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk11">
                                                   <label class="custom-control-label" for="mailk11"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk12">
                                                   <label class="custom-control-label" for="mailk12"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk13">
                                                   <label class="custom-control-label" for="mailk13"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Deray Billings (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg(@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-2.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Deray Billings,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk14">
                                                   <label class="custom-control-label" for="mailk14"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Lauren Drury (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-3.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Lauren Drury,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk15">
                                                   <label class="custom-control-label" for="mailk15"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre(@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk16">
                                                   <label class="custom-control-label" for="mailk16"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="mail-trash" role="tabpanel">
                                 <ul class="mm-email-sender-list">
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk14">
                                                   <label class="custom-control-label" for="mailk14"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Lauren Drury (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-3.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Lauren Drury,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk15">
                                                   <label class="custom-control-label" for="mailk15"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre(@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk16">
                                                   <label class="custom-control-label" for="mailk16"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="mail-important" role="tabpanel">
                                 <ul class="mm-email-sender-list">
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk6">
                                                   <label class="custom-control-label" for="mailk6"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 25, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk7">
                                                   <label class="custom-control-label" for="mailk7"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Deray Billings (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                       <div class="email-app-details">
                                          <div class="card">
                                             <div class="card-body p-0">
                                                <div class="">
                                                   <div class="mm-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="mm-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="mm-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="mm-inbox-subject-info">
                                                         <div class="mm-subject-info">
                                                            <img src={{URL::asset("images/user/user-2.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                            <div class="mm-subject-status align-self-center">
                                                               <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="mm-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>meettaxi@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="mm-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="mm-unread">
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk8">
                                                   <label class="custom-control-label" for="mailk8"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle text-warning"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Lauren Drury (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre (@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-3.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Lauren Drury,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk9">
                                                   <label class="custom-control-label" for="mailk9"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk10">
                                                   <label class="custom-control-label" for="mailk10"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk11">
                                                   <label class="custom-control-label" for="mailk11"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                              <div class="tab-pane fade" id="mail-spam" role="tabpanel">
                                 <ul class="mm-email-sender-list">
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk12">
                                                   <label class="custom-control-label" for="mailk12"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Jopour Xiong (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Mackenzie Barryo (@mackenzieBarryo) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-1.jpg")}}  class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Jopour Xiong,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk13">
                                                   <label class="custom-control-label" for="mailk13"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Deray Billings (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg(@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-2.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Deray Billings,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk14">
                                                   <label class="custom-control-label" for="mailk14"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Lauren Drury (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-3.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Lauren Drury,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk15">
                                                   <label class="custom-control-label" for="mailk15"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Fabian Ros (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Let Hunre(@lethunre) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Fabian Ros,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk16">
                                                   <label class="custom-control-label" for="mailk16"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Dixa Horton (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Eb Begg (@ebbegg) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Dixa Horton,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <li>
                                       <div class="d-flex align-self-center">
                                          <div class="mm-email-sender-info">
                                             <div class="mm-checkbox-mail">
                                                <div class="custom-control custom-checkbox">
                                                   <input type="checkbox" class="custom-control-input" id="mailk17">
                                                   <label class="custom-control-label" for="mailk17"></label>
                                                </div>
                                             </div>
                                             <span class="ri-star-line mm-star-toggle"></span>
                                             <a href="javascript: void(0);" class="mm-email-title">Megan Allen (Me)</a>
                                          </div>
                                          <div class="mm-email-content">
                                             <a href="javascript: void(0);" class="mm-email-subject">Jecno Mac (@jecnomac) has sent
                                             you a direct message on Twitter! &nbsp;–&nbsp;
                                             <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                             </a>
                                             <div class="mm-email-date">11:49 am</div>
                                          </div>
                                          <ul class="mm-social-media">
                                             <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                             <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                             <li><a href="#"><i class="ri-time-line"></i></a></li>
                                          </ul>
                                       </div>
                                    </li>
                                    <div class="email-app-details">
                                       <div class="card">
                                          <div class="card-body p-0">
                                             <div class="">
                                                <div class="mm-email-to-list p-3">
                                                   <div class="d-flex justify-content-between">
                                                      <ul>
                                                         <li class="mr-3">
                                                            <a href="javascript: void(0);">
                                                               <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                            </a>
                                                         </li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                         <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                      </ul>
                                                      <div class="mm-email-search d-flex">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a class="font-size-14" href="#">1 of 505</a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-0">
                                                <div class="mm-inbox-subject p-3">
                                                   <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                   <div class="mm-inbox-subject-info">
                                                      <div class="mm-subject-info">
                                                         <img src={{URL::asset("images/user/user-4.jpg")}} class="img-fluid rounded avatar-100" alt="#">
                                                         <div class="mm-subject-status align-self-center">
                                                            <h6 class="mb-0">{{ config('app.name') }} team <a href="dummy@example.com">dummy@example.com</a></h6>
                                                            <div class="dropdown">
                                                               <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                               to Me
                                                               </a>
                                                               <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                  <table class="mm-inbox-details">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td>from:</td>
                                                                           <td>Medium Daily Digest</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>reply-to:</td>
                                                                           <td>noreply@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>to:</td>
                                                                           <td>meettaxi@gmail.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>date:</td>
                                                                           <td>13 Dec 2019, 08:30</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>subject:</td>
                                                                           <td>The Golden Rule</td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td>security:</td>
                                                                           <td>Standard encryption</td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                      </div>
                                                      <div class="mm-inbox-body mt-5">
                                                         <p>Hi Megan Allen,</p>
                                                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                         <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                         <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                      </div>
                                                      <hr>
                                                      <div class="attegement">
                                                         <h6 class="mb-2">ATTACHED FILES:</h6>
                                                         <ul>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                            </li>
                                                            <li class="icon icon-attegment">
                                                               <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="compose-email-popup" class="compose-popup modal modal-sticky-bottom-right modal-sticky-lg">
               <div class="card mm-border-radius-20 mb-0">
                  <div class="card-body">
                     <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                           <h5 class="text-primary float-left"><i class="ri-pencil-fill"></i> Compose Message</h5>
                           <button type="submit" class="float-right close-popup" data-dismiss="modal"><i class="ri-close-fill"></i></button>
                        </div>
                     </div>
                     <form class="email-form">
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">To:</label>
                           <div class="col-sm-10">
                              <select  id="inputEmail3" class="select2jsMultiSelect form-control" multiple="multiple">
                                 <option value="Petey Cruiser">Petey Cruiser</option>
                                 <option value="Bob Frapples">Bob Frapples</option>
                                 <option value="Barb Ackue">Barb Ackue</option>
                                 <option value="Greta Life">Greta Life</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="cc" class="col-sm-2 col-form-label">Cc:</label>
                           <div class="col-sm-10">
                              <select  id="cc" class="select2jsMultiSelect form-control" multiple="multiple">
                                 <option value="Brock Lee">Brock Lee</option>
                                 <option value="Rick O'Shea">Rick O'Shea</option>
                                 <option value="Cliff Hanger">Cliff Hanger</option>
                                 <option value="Barb Dwyer">Barb Dwyer</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="subject" class="col-sm-2 col-form-label">Subject:</label>
                           <div class="col-sm-10">
                              <input type="text"  id="subject" class="form-control">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="subject" class="col-sm-2 col-form-label">Your Message:</label>
                           <div class="col-md-10">
                              <textarea class="textarea form-control" rows="5">Next, use our Get Started docs to setup Tiny!</textarea>
                           </div>
                        </div>
                        <div class="form-group row align-items-center compose-bottom pt-3 m-0">
                           <div class="d-flex flex-grow-1 align-items-center">
                              <div class="send-btn">
                                 <button type="submit" class="btn btn-primary">Send</button>
                              </div>
                              <div class="send-panel">
                                 <label class="ml-2 mb-0 bg-primary-light rounded" for="file"> <input type="file" id="file" style="display: none"> <a><i class="ri-attachment-line"></i> </a> </label>
                                 <label class="ml-2 mb-0 bg-primary-light rounded"> <a href="javascript:void();"> <i class="ri-map-pin-user-line text-primary"></i></a>  </label>
                                 <label class="ml-2 mb-0 bg-primary-light rounded"> <a href="javascript:void();"> <i class="ri-drive-line text-primary"></i></a>  </label>
                                 <label class="ml-2 mb-0 bg-primary-light rounded"> <a href="javascript:void();"> <i class="ri-camera-line text-primary"></i></a>  </label>
                                 <label class="ml-2 mb-0 bg-primary-light rounded"> <a href="javascript:void();"> <i class="ri-user-smile-line text-primary"></i></a>  </label>
                              </div>
                           </div>
                           <div class="d-flex align-items-center">
                              <div class="send-panel float-right">
                                 <label class="ml-2 mb-0 bg-primary-light rounded" ><a href="javascript:void();"><i class="ri-settings-2-line text-primary"></i></a></label>
                                 <label class="ml-2 mb-0 bg-primary-light rounded"><a href="javascript:void();">  <i class="ri-delete-bin-line text-primary"></i></a>  </label>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
