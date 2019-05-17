<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="page-container">

    <div class="main-content">

        <div class="container-fluid">

            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">信息修改</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                    <ol class="breadcrumb float-right">
                        <li><a href="/admin/main/index">返回首页</a></li>
                    </ol>
                </div>
            </div>

        </div>
        <script>
        function checkPasswords(){
            var pass1=document.getElementById("new");
            var pass2=document.getElementById("newagain");
            
            if (pass1.value != pass2.value)
                pass1.setCustomValidity("两次输入的密码不一致");
            else
                pass1.setCustomValidity("");
        }
        </script>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">密码修改</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <form class="forms-sample" method="POST">
                                <div class="form-group row">
                                    <label for="new" class="col-sm-2 col-form-label">新密码</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="new" id="new" placeholder="New Password" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="newagain" class="col-sm-2 col-form-label">确认密码</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="newagain" name="newagain" placeholder="New Password Again" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-common mr-3" onclick=checkPasswords();>Submit</button>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="content-footer">
        <div class="footer">
            <div class="copyright" style="text-align: center;">
                <span>Copyright © 2003-2019 V5++, All Right Reserved</span>
            </div>
        </div>
    </footer>

</div>