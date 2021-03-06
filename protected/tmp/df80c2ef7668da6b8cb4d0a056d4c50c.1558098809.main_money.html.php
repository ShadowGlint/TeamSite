<?php if(!class_exists("View", false)) exit("no direct access allowed");?><script>
    function search(){
        var form = document.getElementById('forms');
        form.submit();
    }
</script>

<div class="page-container">

        <div class="main-content">
            <div class="container-fluid">
    
                <div class="breadcrumb-wrapper row">
                    <div class="col-12 col-lg-3 col-md-6">
                        <h4 class="page-title">日常记录</h4>
                    </div>
                    <div class="col-12 col-lg-9 col-md-6">
                        <ol class="breadcrumb float-right">
                            <li><a href="/admin/main/index">返回首页</a></li>
                        </ol>
                    </div>
                </div>
    
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <div class="float-left">
                                    <h4 class="card-title">用款记录</h4>
                                </div>
                                <div class="float-left" style="padding-left: 15px;padding-top: 2px;">
                                    <h5 style="margin:0px"><a href="/admin/write/money">[记一账]</a></h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div></div>
                                </div>
                                <div class="col-sm-12 col-md-5" style="float:right">
                                    <div id="datatable_filter" class="dataTables_filter">
                                        <form action="/admin/main/money" method="post" id="forms">
                                            <input type="search" class="form-control form-control-sm" name="name" style="float:right;width:40%;margin-top:20px" >
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-1" style="float:left;padding:0px; padding-top:23px;">
                                    <button type="button" class="btn btn-common" onclick=search();>搜索</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>用款方向</th>
                                                <th>具体原因</th>
                                                <th>交易金额</th>
                                                <th>交易时间</th>
                                                <th>操作人</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($outDetail)){ $_foreach_v_counter = 0; $_foreach_v_total = count($outDetail);?><?php foreach( $outDetail as $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($v['kind'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['reason'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['money'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['date'], ENT_QUOTES, "UTF-8"); ?></td>
                                                <td><?php echo htmlspecialchars($v['name'], ENT_QUOTES, "UTF-8"); ?></td>
                                            </tr>
                                            <?php endforeach; }?>
                                        </tbody>
                                    </table>
                                </div>
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