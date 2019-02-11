        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Добавьте автора</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>ФИО автора</label>
                                            <input name="author" class="form-control" value="<?=set_value('author');?>" placeholder="ФИО автора">
                                        </div>
                                        <div class="form-group">
                                            <label>Колличество книг</label>
                                            <input name="numberBooks" class="form-control" value="<?=set_value('numberBooks');?>" placeholder="Колличество книг">
                                        </div>
                                        
                                        <input type="submit" name="add" class="btn btn-default" value="Добавить автора">
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
