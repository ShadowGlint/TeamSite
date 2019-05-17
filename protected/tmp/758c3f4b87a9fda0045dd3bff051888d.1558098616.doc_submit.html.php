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
                    <h4 class="card-title">文档提交</h4>
                </div>
                <div class="card-body">
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="taskid" value='<?php echo htmlspecialchars($taskid, ENT_QUOTES, "UTF-8"); ?>'>
                        <div class="form-group">
                            <label>文档描述</label>
                            <input type="text" class="form-control" name="infor" required>
                            <?php echo htmlspecialchars($taskid, ENT_QUOTES, "UTF-8"); ?>
                        </div>
                        <div class="form-group">
                            <label>文档类型</label>
                            <select class="form-control" style="padding: 8px" name="kind">
                                <option value="1">技术文档</option>
                                <option value="2">说明文档</option>
                                <option value="3">工作报告</option>
                                <option value="4">其他文件</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>文档附件</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="choosefile" name="file">
                                <label class="custom-file-label" for="choosefile">选择文件</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-common mr-3">提交</button>
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