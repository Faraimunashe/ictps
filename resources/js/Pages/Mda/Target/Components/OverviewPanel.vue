<template>
    <div class="col-xl-7 col-xxl-8">
              <OverviewCard />

              <ul class="nav nav-underline fs-9 deal-details scrollbar flex-nowrap w-100 pb-1 mb-6" id="myTab" role="tablist" style="overflow-y: hidden;">
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link active" id="task-tab" data-bs-toggle="tab" href="#tab-task" role="tab" aria-controls="tab-task" aria-selected="true"> <span class="fa-solid fa-square-check me-2 tab-icon-color"></span>Milestones</a></li>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="call-tab" data-bs-toggle="tab" href="#tab-call" role="tab" aria-controls="tab-call" aria-selected="true"> <span class="fa-solid fa-phone me-2 tab-icon-color"></span>Financials</a></li>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="attachments-tab" data-bs-toggle="tab" href="#tab-attachments" role="tab" aria-controls="tab-attachments" aria-selected="true"> <span class="fa-solid fa-paperclip me-2 tab-icon-color"></span>Attachments</a></li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="tab-task" role="tabpanel" aria-labelledby="task-tab">
                  <h2 class="mb-4">Milestones</h2>
                  <div class="row align-items-center g-0 justify-content-start mb-3">
                    <div class="col-12 col-sm-auto">
                      <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                        <form class="position-relative">
                          <input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                          <span class="fas fa-search search-box-icon"></span>

                        </form>
                      </div>
                    </div>
                    <div class="col-auto d-flex">
                      <p class="mb-0 ms-sm-3 fs-9 text-body-tertiary fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs-10"></span>23 tasks</p>
                      <button class="btn btn-link p-0 ms-3 fs-9 text-primary fw-bold"><span class="fas fa-sort me-1 fw-extra-bold fs-10"></span>Sorting</button>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                          <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" />
                          <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-0">Platforms for data administration</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">19 Nov, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">11:56 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-2">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                          <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" />
                          <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-1">Make wiser business choices.</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">05 Nov, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">09:30 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-3">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                          <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" />
                          <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-2">Market and consumer insights</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">02 Nov, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">05:25 AM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-4">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                          <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" />
                          <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-3">Dashboards for business insights</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">29 Oct, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">08:21 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-5">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                          <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" checked />
                          <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-4">Analytics and consultancy for data</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">21 Oct, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">03:45 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-6">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                          <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" checked />
                          <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-5">Planning your locations Customer data platform</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">14 Oct, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">10:00 PM</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
                    <div class="col-12 col-lg-auto flex-1">
                      <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-7">
                        <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                          <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" checked />
                          <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-6">Promotion of technology</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-auto">
                      <div class="d-flex ms-4 lh-1 align-items-center">
                        <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">12 Oct, 2022</p>
                        <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                          <div class="hover-actions end-0">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0"><span class="fas fa-trash"></span></button>
                          </div>
                        </div>
                        <div class="hover-lg-hide">
                          <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">02:00 AM</p>
                        </div>
                      </div>
                    </div>
                  </div><a class="fw-bold fs-9 mt-4" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a>
                </div>
                <div class="tab-pane fade" id="tab-call" role="tabpanel" aria-labelledby="call-tab">
                  <div class="row align-items-center gx-4 gy-3 flex-wrap mb-3">
                    <div class="col-auto d-flex flex-1">
                      <h2 class="mb-0">Call</h2>
                    </div>
                    <div class="col-auto">
                      <div class="d-flex gap-3 gap-sm-4">
                        <div class="form-check">
                          <input class="form-check-input" id="allCall" type="radio" name="allCall" checked />
                          <label class="form-check-label" for="allCall">All Call</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="incomingCall" type="radio" name="allCall" />
                          <label class="form-check-label" for="incomingCall">Incoming Call</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="outgoingCall" type="radio" name="allCall" />
                          <label class="form-check-label" for="outgoingCall">OutgoingCall</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-primary"><span class="fa-solid fa-plus me-2"></span>Add Call</button>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-translucent" id="leadDetailsTable" data-list='{"valueNames":["name","description","create_date","create_by","last_activity"],"page":5,"pagination":true}'>
                    <div class="table-responsive scrollbar mx-n1 px-1">
                      <table class="table fs-9 mb-0">
                        <thead>
                          <tr>
                            <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                              <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" type="checkbox" data-bulk-select='{"body":"lead-details-table-body"}' />
                              </div>
                            </th>
                            <th class="sort white-space-nowrap align-middle pe-3 ps-0 text-uppercase" scope="col" data-sort="name" style="width:20%; min-width:100px">Name</th>
                            <th class="sort align-middle pe-6 text-uppercase" scope="col" data-sort="description" style="width:20%; max-width:60px">description</th>
                            <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="create_date" style="width:20%; min-width:115px">create date</th>
                            <th class="sort align-middle text-start text-uppercase" scope="col" data-sort="create_by" style="width:20%; min-width:150px">create by</th>
                            <th class="sort align-middle ps-0 text-end text-uppercase" scope="col" data-sort="last_activity" style="width:20%; max-width:115px">Last Activity</th>
                            <th class="align-middle pe-0 text-end" scope="col" style="width:15%;"></th>
                          </tr>
                        </thead>
                        <tbody class="list" id="lead-details-table-body">
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" type="checkbox" data-bulk-select-row='{"Name":{"avatar":"../../../../../images/logo.png","name":"Ansolo Lazinatov","status":"online"},"description":"Purchasing-Related Vendors","date":"Dec 29, 2021","creatBy":"Ansolo Lazinarov","lastActivity":{"iconColor":"text-success","label":"Active"}}' />
                              </div>
                            </td>
                            <td class="name align-middle white-space-nowrap py-2 ps-0"><a class="d-flex align-items-center text-body-highlight" href="#!">
                                <div class="avatar avatar-m me-3 status-online"><img class="rounded-circle" src="../../../../../images/logo.png" alt="" />
                                </div>
                                <h6 class="mb-0 text-body-highlight fw-bold">Ansolo Lazinatov</h6>
                              </a></td>
                            <td class="description align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 pe-6">Purchasing-Related Vendors</td>
                            <td class="create_date text-end align-middle white-space-nowrap text-body py-2">Dec 29, 2021</td>
                            <td class="create_by align-middle white-space-nowrap fw-semibold text-body-highlight">Ansolo Lazinarov</td>
                            <td class="last_activity align-middle text-center py-2">
                              <div class="d-flex align-items-center flex-1"><span class="fa-solid fa-clock me-1 text-success" data-fa-transform="shrink-2 up-1"></span><span class="fw-bold fs-9 text-body">Active</span></div>
                            </td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static">
                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" type="checkbox" data-bulk-select-row='{"Name":{"avatar":"../../../../../images/logo.png","name":"Jackson Pollock","status":"offline"},"description":"Based on emails sent rate, the top 10 users","date":"Mar 27, 2021","creatBy":"Jackson Pollock","lastActivity":{"iconColor":"text-body-quaternary","label":"6 hours ago"}}' />
                              </div>
                            </td>
                            <td class="name align-middle white-space-nowrap py-2 ps-0"><a class="d-flex align-items-center text-body-highlight" href="#!">
                                <div class="avatar avatar-m me-3 status-offline"><img class="rounded-circle" src="../../../../../images/logo.png" alt="" />
                                </div>
                                <h6 class="mb-0 text-body-highlight fw-bold">Jackson Pollock</h6>
                              </a></td>
                            <td class="description align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 pe-6">Based on emails sent rate, the top 10 users</td>
                            <td class="create_date text-end align-middle white-space-nowrap text-body py-2">Mar 27, 2021</td>
                            <td class="create_by align-middle white-space-nowrap fw-semibold text-body-highlight">Jackson Pollock</td>
                            <td class="last_activity align-middle text-center py-2">
                              <div class="d-flex align-items-center flex-1"><span class="fa-solid fa-clock me-1 text-body-quaternary" data-fa-transform="shrink-2 up-1"></span><span class="fw-bold fs-9 text-body">6 hours ago</span></div>
                            </td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static">
                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" type="checkbox" data-bulk-select-row='{"Name":{"avatar":"../../../../../images/logo.png","name":"Ansolo Lazinatov","status":"online"},"description":"Based on the percentage of recipients","date":"Jun 24, 2021","creatBy":"Ansolo Lazinarov","lastActivity":{"iconColor":"text-success","label":"Active"}}' />
                              </div>
                            </td>
                            <td class="name align-middle white-space-nowrap py-2 ps-0"><a class="d-flex align-items-center text-body-highlight" href="#!">
                                <div class="avatar avatar-m me-3 status-online"><img class="rounded-circle" src="../../../../../images/logo.png" alt="" />
                                </div>
                                <h6 class="mb-0 text-body-highlight fw-bold">Ansolo Lazinatov</h6>
                              </a></td>
                            <td class="description align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 pe-6">Based on the percentage of recipients</td>
                            <td class="create_date text-end align-middle white-space-nowrap text-body py-2">Jun 24, 2021</td>
                            <td class="create_by align-middle white-space-nowrap fw-semibold text-body-highlight">Ansolo Lazinarov</td>
                            <td class="last_activity align-middle text-center py-2">
                              <div class="d-flex align-items-center flex-1"><span class="fa-solid fa-clock me-1 text-success" data-fa-transform="shrink-2 up-1"></span><span class="fw-bold fs-9 text-body">Active</span></div>
                            </td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static">
                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" type="checkbox" data-bulk-select-row='{"Name":{"avatar":"../../../../../images/logo.png","name":"Jackson Pollock","status":"offline"},"description":"Obtaining leads today","date":"May 19, 2024","creatBy":"Jackson Pollock","lastActivity":{"iconColor":"text-body-quaternary","label":"6 hours ago"}}' />
                              </div>
                            </td>
                            <td class="name align-middle white-space-nowrap py-2 ps-0"><a class="d-flex align-items-center text-body-highlight" href="#!">
                                <div class="avatar avatar-m me-3 status-offline"><img class="rounded-circle" src="../../../../../images/logo.png" alt="" />
                                </div>
                                <h6 class="mb-0 text-body-highlight fw-bold">Jackson Pollock</h6>
                              </a></td>
                            <td class="description align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 pe-6">Obtaining leads today</td>
                            <td class="create_date text-end align-middle white-space-nowrap text-body py-2">May 19, 2024</td>
                            <td class="create_by align-middle white-space-nowrap fw-semibold text-body-highlight">Jackson Pollock</td>
                            <td class="last_activity align-middle text-center py-2">
                              <div class="d-flex align-items-center flex-1"><span class="fa-solid fa-clock me-1 text-body-quaternary" data-fa-transform="shrink-2 up-1"></span><span class="fw-bold fs-9 text-body">6 hours ago</span></div>
                            </td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static">
                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" type="checkbox" data-bulk-select-row='{"Name":{"avatar":"../../../../../images/logo.png","name":"Ansolo Lazinatov","status":"online"},"description":"Sums up the many phases of new and existing businesses.","date":"Aug 19, 2024","creatBy":"Ansolo Lazinarov","lastActivity":{"iconColor":"text-success","label":"Active"}}' />
                              </div>
                            </td>
                            <td class="name align-middle white-space-nowrap py-2 ps-0"><a class="d-flex align-items-center text-body-highlight" href="#!">
                                <div class="avatar avatar-m me-3 status-online"><img class="rounded-circle" src="../../../../../images/logo.png" alt="" />
                                </div>
                                <h6 class="mb-0 text-body-highlight fw-bold">Ansolo Lazinatov</h6>
                              </a></td>
                            <td class="description align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 pe-6">Sums up the many phases of new and existing businesses.</td>
                            <td class="create_date text-end align-middle white-space-nowrap text-body py-2">Aug 19, 2024</td>
                            <td class="create_by align-middle white-space-nowrap fw-semibold text-body-highlight">Ansolo Lazinarov</td>
                            <td class="last_activity align-middle text-center py-2">
                              <div class="d-flex align-items-center flex-1"><span class="fa-solid fa-clock me-1 text-success" data-fa-transform="shrink-2 up-1"></span><span class="fw-bold fs-9 text-body">Active</span></div>
                            </td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static">
                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="fs-9 align-middle px-0 py-3">
                              <div class="form-check mb-0 fs-8">
                                <input class="form-check-input" type="checkbox" data-bulk-select-row='{"Name":{"avatar":"../../../../../images/logo.png","name":"Ansolo Lazinatov","status":"online"},"description":"Purchasing-Related Vendors","date":"Aug 19, 2024","creatBy":"Ansolo Lazinarov","lastActivity":{"iconColor":"text-success","label":"Active"}}' />
                              </div>
                            </td>
                            <td class="name align-middle white-space-nowrap py-2 ps-0"><a class="d-flex align-items-center text-body-highlight" href="#!">
                                <div class="avatar avatar-m me-3 status-online"><img class="rounded-circle" src="../../../../../images/logo.png" alt="" />
                                </div>
                                <h6 class="mb-0 text-body-highlight fw-bold">Ansolo Lazinatov</h6>
                              </a></td>
                            <td class="description align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2 pe-6">Purchasing-Related Vendors</td>
                            <td class="create_date text-end align-middle white-space-nowrap text-body py-2">Aug 19, 2024</td>
                            <td class="create_by align-middle white-space-nowrap fw-semibold text-body-highlight">Ansolo Lazinarov</td>
                            <td class="last_activity align-middle text-center py-2">
                              <div class="d-flex align-items-center flex-1"><span class="fa-solid fa-clock me-1 text-success" data-fa-transform="shrink-2 up-1"></span><span class="fw-bold fs-9 text-body">Active</span></div>
                            </td>
                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                              <div class="btn-reveal-trigger position-static">
                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                  <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                      <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                      </div>
                      <div class="col-auto d-flex">
                        <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-attachments" role="tabpanel" aria-labelledby="attachments-tab">
                  <h2 class="mb-4">Attachments</h2>
                  <div class="border-top border-dashed pt-3 pb-4">
                    <div class="d-flex flex-between-center">
                      <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                        <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                      </div>
                      <div class="btn-reveal-trigger">
                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                      </div>
                    </div>
                    <p class="fs-9 text-body-tertiary mb-2"><span>768kB</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="./../../../../../images/farie.jpg" alt="" />
                  </div>
                  <div class="border-top border-dashed py-4">
                    <div class="d-flex flex-between-center">
                      <div>
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span>
                          <p class="text-body-highlight mb-0 lh-1">All_images.zip</p>
                        </div>
                        <p class="fs-9 text-body-tertiary mb-0"><span>12.8 mB</span><span class="text-body-quaternary mx-1">|</span><a href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                      </div>
                      <div class="btn-reveal-trigger">
                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-dashed py-4">
                    <div class="d-flex flex-between-center">
                      <div>
                        <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                          <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                        </div>
                        <p class="fs-9 text-body-tertiary mb-0"><span>123 kB</span><span class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                      </div>
                      <div class="btn-reveal-trigger">
                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
</template>

<script>
    import OverviewCard from "./OverviewCard.vue";
    export default {
        components: {
            OverviewCard
        }
    }
</script>
