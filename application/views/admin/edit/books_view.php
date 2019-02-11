        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Редактирование книги</h1>
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
                                    <form method="post" action="" role="form">
                                        <div class="form-group">
                                            <label>Заглавие книги</label>
                                            <input name="nameBooks" class="form-control" value="<?=$pages_info['nameBooks']?>" placeholder="Введите заглавие книги">
                                        </div>
                                        <div class="form-group">
                                            <label>Стоимость книги</label>
                                            <input name="priceBooks" class="form-control" value="<?=$pages_info['priceBooks']?>" placeholder="Введите стоимость книги">
                                        </div>
                                        <div class="form-group">
                                            <label>Автор книги</label>
                                            <input name="author" class="form-control" value="<?=$pages_info['author']?>" placeholder="Введите ФИО автора">
                                        </div>
                                        <input type="submit" name="edit" class="btn btn-primary btn-lg" value="Сохранить книгу">
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
