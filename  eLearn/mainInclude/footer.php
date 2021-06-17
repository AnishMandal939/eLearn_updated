<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2021 || Designed by E-Learn|| +9779862170694 <a href="#login"  class="admin-link" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a> </small>
</footer>
<!-- end footer -->

<!-- start student  registration form model -->
<!-- Button trigger modal -->


<!-- Modal -->
        <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuRegModalCenterLabel">User Registration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- student registration form -->
            <?php include('studentRegistration.php'); ?>
           <!-- end student registration form -->

            </div>
            <div class="modal-footer">
            <span id="successMsg">
            </span>
                <button type="button" class="btn btn-primary" onclick="addStu()" id="signup" >Sign Up</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
            </div>
            </div>
        </div>
        </div>

<!-- end student registration form model -->

<!-- start student  login form model -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stuLoginModalCenterLabel">User Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- student login form -->
            <form id="stuLoginForm">
                
                <div class="form-group">
                <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
                    <input type="text" class="form-control" id="stuLogemail" name="stuLogemail" placeholder="Email">
                    
                </div>
                <div class="form-group">
                <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold"> Password</label>
                    <input type="password" class="form-control" id="stuLogpass" name="stupass" placeholder="Password">
                </div>
                
                
                </form>
                <!-- end student login form -->

            </div>
            <div class="modal-footer">
            <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary"  id="stuLoginbtn" onclick="checkStuLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
        </div>

<!-- end student login form model -->

<!-- start Admin  login form model -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="stuAdminModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- student login form -->
            <form id="adminLoginForm">
                
                <div class="form-group">
                <i class="fas fa-envelope"></i><label for="adminLoginmail" class="pl-2 font-weight-bold">Email</label>
                    <input type="text" class="form-control" id="adminLogemail" name="adminLogemail" placeholder="Email">
                    
                </div>
                <div class="form-group">
                <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold"> Password</label>
                    <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
                </div>
                
                
                </form>
                <!-- end student login form -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"  id="stuLoginbtn"  onclick="checkAdminLogin()" >Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
            </div>
         </div>
        </div>

<!-- end student login form model -->

    <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<!-- fontawesome start -->
    <script type="text/javascript" src="js/all.min.js"></script>
    <!-- student testimonial start -->
    <!-- <script type="text/javascript" src="js/owl.carousel.min.js"></script> -->
  
    <!-- student testimonial end -->

    <!-- student ajax call javaScript  start -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>
    <!-- end ajax -->
      <!-- admin ajax call javaScript  start -->
      <script type="text/javascript" src="../js/adminajaxrequest.js"></script>

    <!-- end ajax -->
    <!-- custom js -->
    <script type="text/javascript" src="../js/custom.js"></script>


</body>
</html>