        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Выберите страницу для редактирования</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Все рубрики
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"># id</th>
                                            <th class="text-center">ФИО автора</th>
                                            <th class="text-center">Колличество книг</th>
                                            <th class="text-center">Удалить</th>
                                        </tr>
                                    </thead>
                                    <tbody class="sortable_cat">
                                        <?php foreach($edit as $item): ?>
                                        <form method="post" action="">
                                            <tr id="<?=$item['id'];?>">
                                                <td><?=$item['id'];?></td>
                                                <td><a href="<?=base_url();?>index.php/admin/edit/author/<?=$item['id'];?>"><?=$item['author'];?></a></td>
                                                <td><?=$item['numberBooks'];?></td>
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
