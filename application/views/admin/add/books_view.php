        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Добавьте новую книгу</h1>
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
                                            <label>Заглавие книги</label>
                                            <input name="nameBooks" class="form-control" value="<?=set_value('nameBooks');?>" placeholder="Введите заглавие книги">
                                        </div>
                                        <div class="form-group">
                                            <label>Стоимость книги</label>
                                            <input name="priceBooks" class="form-control" value="<?=set_value('priceBooks');?>" placeholder="Введите стоимость книги">
                                        </div>
                                        <div class="form-group">
                                            <label>Автор книги</label>
                                            <input name="author" class="form-control" value="<?=set_value('author');?>" placeholder="Введите ФИО автора">
                                        </div>
                                        
                                        <input type="submit" name="add" class="btn btn-primary btn-lg" value="Добавить книгу">
                                    </form>
    
                                </div>

                                

                                <!--div class="col-lg-12">
                                    <div class="rules">
                                        <h3 class="text-center">Правила добавления данных</h3>
                                        <ol>
                                            <li>
                                                В первое поле заносится полное название статьи.</br><b>Пример:</b> Кожевников Г. «Памятная дата» (50 лет 3-ему подпольному комитету РКП(б) в Красноярске)
                                            </li>
                                            <li>
                                                Во втором поле Вы выбираете рубрику, к которой относится данная статья.
                                            </li>
                                            <li>
                                                В третьем поле Вы загружаете фотографии статьи.
                                            </li>
                                            <li>
                                                <b>ВНИМАНИЕ!</b> Если статья разбита на несколько страниц,
                                                то перед тем как загрузить их на сервер, необходимо склеить их в одно изображение. 
                                            </li>
                                            <li>
                                                В случае если статья разбивается на несколько изображений (то есть имеет продолжение), 
                                                но в другом номере и в другое время. То такие статьи публикуются как отдельные записи.
                                                </br><b>Пример:</b> Строительство Аэродрома_(начало 05.07.16). Строительство Аэродрома_(конец 09.08.18)
                                            </li>
                                            <li>
                                                <b>ВНИМАНИЕ!</b> Все поля обязательны для заполнения.
                                            </li>
                                        </ol>
                                    </div>
                                </div-->
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
                                 
