<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div class="page-container">

    <div class="main-content">
        
        <div class="container-fluid">

            <div class="breadcrumb-wrapper row">
                <div class="col-12 col-lg-3 col-md-6">
                    <h4 class="page-title">任务中心</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                    <ol class="breadcrumb float-right">
                        <li><a href="/admin/main/index">返回首页</a></li>
                    </ol>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">进度提交</h4>
                </div>
                <div class="card-body">
                    <form class="forms-sample" method="POST">
                        <div class="form-group">
                            <label>任务ID</label>
                            <p><?php echo htmlspecialchars($taskDetail['TaskID'], ENT_QUOTES, "UTF-8"); ?></p>
                            <input type="hidden" class="form-control" name="taskid" value='<?php echo htmlspecialchars($taskDetail['TaskID'], ENT_QUOTES, "UTF-8"); ?>'>
                        </div>
                        <div class="form-group">
                            <label>任务信息</label>
                            <p><?php echo htmlspecialchars($taskDetail['TaskInformation'], ENT_QUOTES, "UTF-8"); ?></p>
                        </div>
                        <div class="form-group">
                            <label>姓名</label>
                            <p><?php echo htmlspecialchars($taskDetail['Name'], ENT_QUOTES, "UTF-8"); ?></p>
                        </div>
                        <div class="form-group m-b-20">
                            <label>进度</label>
                            <textarea class="form-control" rows="4" name="progress" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-common mr-3">提交</button>
                        <!--<button class="btn btn-light">Cancel</button>-->
                    </form>
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