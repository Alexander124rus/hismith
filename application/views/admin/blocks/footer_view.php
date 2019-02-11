
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <!--script type="text/javascript" src="<?=base_url();?>admin/dist/js/jquery-1.11.1.min.js"></script-->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>js/bootstrap.js"></script>
    
    <!-- Tagmanager -->
    <script src="<?=base_url();?>admin_files/dist/js/tagmanager-master/tagmanager.js"></script>
    
    <script src="<?=base_url();?>admin_files/dist/js/bootstrap-tokenfield.js"></script>
    

    <script>
        $(function(){
            $('tbody td:first-child').each(function (i) {
                $(this).html(i+1);
            });
        });
    </script>
    <!-- Tinymce -->
    <script src='<?=base_url();?>tinymce/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: "textarea",theme: "modern",height: 700,
            language: 'ru',
            plugins: [
                 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
           ],
           relative_urls: false,

           toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect formatselect fontselect fontsizeselect       ",
           toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
           /*image_advtab: true ,*/
           
           external_filemanager_path:"http://localhost/hronycom2/tinymce/filemanager/",
           filemanager_title:"Responsive Filemanager" ,
           external_plugins: { "filemanager" : "http://localhost/hronycom2/tinymce/filemanager/plugin.min.js"}
         });
    </script>
    
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url();?>admin_files/bower_components/metisMenu/dist/metisMenu.js"></script>
    <script>
      $(document).ready(function(){
        $('#menu').metisMenu();
      });
    </script>
    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url();?>admin_files/bower_components/raphael/raphael-min.js"></script>
    <script src="<?=base_url();?>admin_files/bower_components/morrisjs/morris.min.js"></script>
    <script src="<?=base_url();?>admin_files/js/morris-data.js"></script>

    <!-- Jquery UI -->
    <script type="text/javascript" src="<?=base_url();?>admin_files/dist/js/jquery-ui.js"></script>

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="<?=base_url();?>admin_files/dist/js/sb-admin-2.js"></script>
    
    <!-- jQuery.filer -->
    <script src="<?=base_url();?>examples/dragdrop/js/jquery.filer.js"></script>
    <script src="<?=base_url();?>examples/dragdrop/js/custom.js" type="text/javascript"></script>

</body>

</html>