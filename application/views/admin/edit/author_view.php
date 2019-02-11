        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Редактирование автора</h1>
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
                                            <input name="author" class="form-control" value="<?=$pages_info['author']?>" placeholder="ФИО автора">
                                        </div>
                                        <div class="form-group">
                                            <label>Колличество книг</label>
                                            <input name="numberBooks " class="form-control" value="<?=$pages_info['numberBooks']?>" placeholder="Колличество книг">
                                        </div>
                                        <input type="submit" name="edit" class="btn btn-default" value="Сохранить">
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
