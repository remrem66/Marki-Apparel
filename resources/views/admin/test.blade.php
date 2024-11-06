<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 10:18:47 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Marki Apparel Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

        <!-- third party css -->
        <link href="{{asset('admin/assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- DataTables -->
        <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
        {{-- <link href="{{asset('admin/assets/css/vendor/dataTables.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/vendor/responsive.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/vendor/buttons.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/vendor/select.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/vendor/fixedHeader.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/vendor/fixedColumns.bootstrap5.css')}}" rel="stylesheet" type="text/css" /> --}}
        <!-- DataTables end -->

        <!-- Toastr -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" async>

        <!-- App css -->
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
         
    </head>
@include('admin.navbar')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Tables</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Data Tables</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Buttons example</h4>
                                        <p class="text-muted font-14">
                                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                                            that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                                        </p>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="buttons-table-preview">
                                                <table id="myTable" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Charde Marshall</td>
                                                            <td>Regional Director</td>
                                                            <td>San Francisco</td>
                                                            <td>36</td>
                                                            <td>2008/10/16</td>
                                                            <td>$470,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Haley Kennedy</td>
                                                            <td>Senior Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>43</td>
                                                            <td>2012/12/18</td>
                                                            <td>$313,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tatyana Fitzpatrick</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>19</td>
                                                            <td>2010/03/17</td>
                                                            <td>$385,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Silva</td>
                                                            <td>Marketing Designer</td>
                                                            <td>London</td>
                                                            <td>66</td>
                                                            <td>2012/11/27</td>
                                                            <td>$198,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paul Byrd</td>
                                                            <td>Chief Financial Officer (CFO)</td>
                                                            <td>New York</td>
                                                            <td>64</td>
                                                            <td>2010/06/09</td>
                                                            <td>$725,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gloria Little</td>
                                                            <td>Systems Administrator</td>
                                                            <td>New York</td>
                                                            <td>59</td>
                                                            <td>2009/04/10</td>
                                                            <td>$237,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bradley Greer</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>41</td>
                                                            <td>2012/10/13</td>
                                                            <td>$132,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dai Rios</td>
                                                            <td>Personnel Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>35</td>
                                                            <td>2012/09/26</td>
                                                            <td>$217,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenette Caldwell</td>
                                                            <td>Development Lead</td>
                                                            <td>New York</td>
                                                            <td>30</td>
                                                            <td>2011/09/03</td>
                                                            <td>$345,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>New York</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>New York</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>Sidney</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Angelica Ramos</td>
                                                            <td>Chief Executive Officer (CEO)</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2009/10/09</td>
                                                            <td>$1,200,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Joyce</td>
                                                            <td>Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>42</td>
                                                            <td>2010/12/22</td>
                                                            <td>$92,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Chang</td>
                                                            <td>Regional Director</td>
                                                            <td>Singapore</td>
                                                            <td>28</td>
                                                            <td>2010/11/14</td>
                                                            <td>$357,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brenden Wagner</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>28</td>
                                                            <td>2011/06/07</td>
                                                            <td>$206,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michelle House</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Sidney</td>
                                                            <td>37</td>
                                                            <td>2011/06/02</td>
                                                            <td>$95,400</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Suki Burks</td>
                                                            <td>Developer</td>
                                                            <td>London</td>
                                                            <td>53</td>
                                                            <td>2009/10/22</td>
                                                            <td>$114,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prescott Bartlett</td>
                                                            <td>Technical Author</td>
                                                            <td>London</td>
                                                            <td>27</td>
                                                            <td>2011/05/07</td>
                                                            <td>$145,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gavin Cortez</td>
                                                            <td>Team Leader</td>
                                                            <td>San Francisco</td>
                                                            <td>22</td>
                                                            <td>2008/10/26</td>
                                                            <td>$235,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Martena Mccray</td>
                                                            <td>Post-Sales support</td>
                                                            <td>Edinburgh</td>
                                                            <td>46</td>
                                                            <td>2011/03/09</td>
                                                            <td>$324,050</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unity Butler</td>
                                                            <td>Marketing Designer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/12/09</td>
                                                            <td>$85,675</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Howard Hatfield</td>
                                                            <td>Office Manager</td>
                                                            <td>San Francisco</td>
                                                            <td>51</td>
                                                            <td>2008/12/16</td>
                                                            <td>$164,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hope Fuentes</td>
                                                            <td>Secretary</td>
                                                            <td>San Francisco</td>
                                                            <td>41</td>
                                                            <td>2010/02/12</td>
                                                            <td>$109,850</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Vivian Harrell</td>
                                                            <td>Financial Controller</td>
                                                            <td>San Francisco</td>
                                                            <td>62</td>
                                                            <td>2009/02/14</td>
                                                            <td>$452,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Timothy Mooney</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>37</td>
                                                            <td>2008/12/11</td>
                                                            <td>$136,200</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jackson Bradshaw</td>
                                                            <td>Director</td>
                                                            <td>New York</td>
                                                            <td>65</td>
                                                            <td>2008/09/26</td>
                                                            <td>$645,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Olivia Liang</td>
                                                            <td>Support Engineer</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2011/02/03</td>
                                                            <td>$234,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bruno Nash</td>
                                                            <td>Software Engineer</td>
                                                            <td>London</td>
                                                            <td>38</td>
                                                            <td>2011/05/03</td>
                                                            <td>$163,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sakura Yamamoto</td>
                                                            <td>Support Engineer</td>
                                                            <td>Tokyo</td>
                                                            <td>37</td>
                                                            <td>2009/08/19</td>
                                                            <td>$139,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thor Walton</td>
                                                            <td>Developer</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2013/08/11</td>
                                                            <td>$98,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Finn Camacho</td>
                                                            <td>Support Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>47</td>
                                                            <td>2009/07/07</td>
                                                            <td>$87,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serge Baldwin</td>
                                                            <td>Data Coordinator</td>
                                                            <td>Singapore</td>
                                                            <td>64</td>
                                                            <td>2012/04/09</td>
                                                            <td>$138,575</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zenaida Frank</td>
                                                            <td>Software Engineer</td>
                                                            <td>New York</td>
                                                            <td>63</td>
                                                            <td>2010/01/04</td>
                                                            <td>$125,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zorita Serrano</td>
                                                            <td>Software Engineer</td>
                                                            <td>San Francisco</td>
                                                            <td>56</td>
                                                            <td>2012/06/01</td>
                                                            <td>$115,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jennifer Acosta</td>
                                                            <td>Junior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>43</td>
                                                            <td>2013/02/01</td>
                                                            <td>$75,650</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cara Stevens</td>
                                                            <td>Sales Assistant</td>
                                                            <td>New York</td>
                                                            <td>46</td>
                                                            <td>2011/12/06</td>
                                                            <td>$145,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hermione Butler</td>
                                                            <td>Regional Director</td>
                                                            <td>London</td>
                                                            <td>47</td>
                                                            <td>2011/03/21</td>
                                                            <td>$356,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lael Greer</td>
                                                            <td>Systems Administrator</td>
                                                            <td>London</td>
                                                            <td>21</td>
                                                            <td>2009/02/27</td>
                                                            <td>$103,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>                                           
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Marki Apparel 2024
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
       

                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>
        

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
            
                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                            class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <!-- jQuery UI 1.11.4 -->
        {{-- <script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script> --}}
        <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js" integrity="sha256-u0L8aA6Ev3bY2HI4y0CAyr9H8FRWgX4hZ9+K7C2nzdc=" crossorigin="anonymous"></script>
        <!-- bundle -->
        <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>

        <!-- third party js -->
        <!-- <script src="assets/js/vendor/chart.min.js"></script> -->
        <script src="{{asset('admin/assets/js/vendor/apexcharts.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- third party js ends -->

        <!-- third party js -->
        {{-- <script src="{{asset('admin/assets/js/vendor/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/responsive.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/buttons.flash.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.select.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/fixedColumns.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/fixedHeader.bootstrap5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vendor/dataTables.checkboxes.min.js')}}"></script> --}}
        <!-- third party js ends -->

        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- demo app -->
        {{-- <script src="{{asset('admin/assets/js/pages/demo.datatable-init.js')}}"></script> --}}
        <!-- end demo js-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <!-- demo app -->
        <script src="{{asset('admin/assets/js/pages/demo.dashboard-analytics.js')}}"></script>

        <!-- demo app -->
        <script src="{{asset('admin/assets/js/pages/demo.products.js')}}"></script>


<script>

    $('#myTable').DataTable({
    layout: {
        topStart: {
            buttons: ['csv', 'excel', 'pdf']
        }
    }
});

</script>

@include('admin.ajax')
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 10:20:07 GMT -->
</html>