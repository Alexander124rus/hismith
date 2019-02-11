
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Выберите книгу для редактирования</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Все книги
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"># id</th>
                                            <th class="text-center">Название книги</th>
                                            <th class="text-center">Стоимость</th>
                                            <th class="text-center">Автор</th>
                                            <th class="text-center">Удалить</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($edit as $item): ?>
                                        <form method="post" action="">
                                            <tr id="<?=$item['id'];?>">
                                                <td><?=$item['id'];?></td>
                                                <td><a id="<?=$item['id'];?>" href="<?=base_url();?>index.php/admin/edit/books/<?=$item['id'];?>"><?=$item['nameBooks'];?></a></td>
                                                <td><?=$item['priceBooks'];?></td>
                                                <td><?=$item['author'];?></td>
                                                <td><input name='del' type='submit' value='Удалить' class="btn btn-default"/></td>
                                                <input type="hidden" name="id" value="<?=$item['id']?>" />
                                            </tr>
                                        </form>
                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
