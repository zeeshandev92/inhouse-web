@extends('admin.layout.index')
@section('title','InHouse | Calendar View')
@section('custom-style')
    <style>
        .select2-container {
            z-index: 9999 !important; /* Ensure it appears above the modal */
        }

        .select2-dropdown {
            z-index: 9999 !important; /* Also set z-index for the dropdown itself */
        }

        .select2-container--default .select2-selection--multiple {
            padding-bottom: 9px;
            padding-top: 3px;
        }

        .search-box .form-control {
            padding: .5rem .9rem;
        }

        .w-33 {
            width: 32.7%;
            font-size: 12px;
        }

    </style>
@endsection
@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div
                        class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">Calendar</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Calendar View</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card">
                        <div class="card-body">
                            <div id="external-events">

                                <div class="external-event fc-event bg-success-subtle text-success"
                                     data-class="bg-success-subtle">
                                    <i class="mdi mdi-checkbox-blank-circle me-2"></i>Upcoming Events
                                </div>
                                <div class="external-event fc-event bg-info-subtle text-info"
                                     data-class="bg-info-subtle">
                                    <i class="mdi mdi-checkbox-blank-circle me-2"></i>New Registrations
                                </div>
                                <div class="external-event fc-event bg-warning-subtle text-warning"
                                     data-class="bg-warning-subtle">
                                    <i class="mdi mdi-checkbox-blank-circle me-2"></i>Vehicle
                                    Maintenance
                                </div>

                            </div>

                        </div>
                    </div>

                    <div>
                        <h5 class="mb-1">Todays Events</h5>
                        <p class="text-muted">Don't miss scheduled events</p>
                        <div class="pe-2 me-n1 mb-3" data-simplebar style="height: 400px">
                            <div id="upcoming-event-list"></div>
                        </div>
                    </div>


                    <!--end card-->
                </div>
                <!--end col-->

                <div class="col-xxl-9">
                    <div class="card border card-border-dark">

                        <div class="card-body">
                            <div id="calendar"></div>
                        </div><!-- end card-body -->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel">Add Notes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close" id="close-modal"></button>
                </div>
                <form class="tablelist-form" autocomplete="off">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="plan" class="form-label">Select Customer</label>
                                    <select class="form-control" data-plugin="choices" data-choices=""
                                            data-choices-search-false="" name="choices-single-default"
                                            id="idStatus">
                                        <option value="enable" selected="">Riccardo Baisi</option>
                                        <option value="">Marco Meucci</option>
                                        <option value="">Michael Ponziani</option>
                                        <option value="">Massimo Boldi</option>
                                        <option value="">Michael Lucchesi</option>
                                        <option value="">Michael Lucchesi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Notes</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack">
                            <button type="submit" class="btn btn-success" id="add-btn">Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add New Appointment MODAL -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close" id="close-modal"></button>
                </div>
                <form class="tablelist-form" autocomplete="off">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="session" class="form-label">Select Customer</label>
                                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                        <optgroup label="Customers">
                                            <option value="">Marco Meucci</option>
                                            <option value="">Michael Ponziani</option>
                                            <option value="">Massimo Boldi</option>
                                            <option value="">Michael Lucchesi</option>
                                            <option value="">Riccardo Baisi</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="plan" class="form-label">Active Workouts</label>
                                    <input type="text" class="form-control" name="workout" value="Hybrid Workout"
                                           readonly>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="session" class="form-label">Add Sessions</label>
                                    <select class="form-control" data-plugin="choices" data-choices=""
                                            data-choices-search-false="" name="choices-single-default"
                                            id="idStatus">
                                        <option value="Arm">Arm Session</option>
                                        <option value="Biceps" selected>Biceps Session</option>
                                        <option value="Leg">Leg Session</option>
                                        <option value="Back">Back Session</option>
                                        <option value="Chest" selected>Chest Session</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Select Date</label>
                                    <input type="date" class="form-control" name="date">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="slots" class="form-label">Available Slots</label>
                            </div>
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-light mb-2 w-33">10:00 AM - 10:30 AM</button>
                                <button type="button" class="btn btn-light mb-2 w-33">11:00 AM - 11:30 AM</button>
                                <button type="button" class="btn btn-primary mb-2 w-33">12:00 PM - 12:30 PM</button>
                                <button type="button" class="btn btn-light mb-2 w-33">01:00 PM - 01:30 PM</button>
                                <button type="button" class="btn btn-light mb-2 w-33">02:00 AM - 02:30 PM</button>

                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="session" class="form-label">Description</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack">
                            <button type="submit" class="btn btn-success" id="add-btn">Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add New Event MODAL -->
    <div class="modal fade" id="event-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header p-3 bg-info-subtle">
                    <h5 class="modal-title" id="modal-title">Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                        <div class="text-end">
                            <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn" data-id="edit-event"
                               onclick="editEvent(this)" role="button">Edit</a>
                        </div>
                        <div class="event-details">
                            <div class="d-flex mb-2">
                                <div class="flex-grow-1 d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="ri-calendar-event-line text-muted fs-16"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-time-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> -
                                        <span id="event-timepicker2-tag"></span></h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center d-none">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-map-pin-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="d-block fw-semibold mb-0"><span id="event-location-tag"></span></h6>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-discuss-line text-muted fs-16"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row event-form">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <select class="form-select d-none" name="category" id="event-category" required>
                                        <option value="bg-danger-subtle">Danger</option>
                                        <option value="bg-success-subtle">Success</option>
                                        <option value="bg-primary-subtle">Primary</option>
                                        <option value="bg-info-subtle">Info</option>
                                        <option value="bg-dark-subtle">Dark</option>
                                        <option value="bg-warning-subtle">Warning</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid appointment category</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Appointment Name</label>
                                    <input class="form-control d-none" placeholder="Enter appointment name" type="text"
                                           name="title" id="event-title" required value=""/>
                                    <div class="invalid-feedback">Please provide a valid appointment name</div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label>Appointment Date</label>
                                    <div class="input-group d-none">
                                        <input type="text" id="event-start-date"
                                               class="form-control flatpickr flatpickr-input" placeholder="Select date"
                                               readonly required>
                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12" id="event-time">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Start Time</label>
                                            <div class="input-group d-none">
                                                <input id="timepicker1" type="text"
                                                       class="form-control flatpickr flatpickr-input"
                                                       placeholder="Select start time" readonly>
                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">End Time</label>
                                            <div class="input-group d-none">
                                                <input id="timepicker2" type="text"
                                                       class="form-control flatpickr flatpickr-input"
                                                       placeholder="Select end time" readonly>
                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="event-location">Location</label>
                                    <div>
                                        <input type="text" class="form-control d-none" name="event-location"
                                               id="event-location" placeholder="Event location">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <input type="hidden" id="eventid" name="eventid" value=""/>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control d-none" id="event-description"
                                              placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-soft-danger" id="btn-delete-event"><i
                                    class="ri-close-line align-bottom"></i> Delete
                            </button>
                            <button type="submit" class="btn btn-success" id="btn-save-event">Add Event</button>
                        </div>
                    </form>
                </div>
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div> <!-- end modal-->
    <!--end modal -->


@endsection
@section('custom-script')
    <!-- calendar min js -->
    <script src="{{asset('dashboard_assets/assets/libs/fullcalendar/index.global.min.js')}}"></script>

    <!-- Calendar init -->
    <script src="{{asset('dashboard_assets/assets/js/pages/calendar.init.js')}}"></script>
@endsection
