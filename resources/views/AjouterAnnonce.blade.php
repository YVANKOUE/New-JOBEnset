<meta name="csrf_token" content="{{ csrf_token() }}" />
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/bootstrap-submenu.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('assets/front/css/skins/red.css') }}">

    <style>
 

.registration-form{
	padding: 50px 0;
    background-color: #dee9ff;
}

.registration-form form{
    background-color: #fff;
    max-width: 900px;
    margin: auto;
    padding: 50px 70px;
    border-radius: 30px 30px 30px 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .form-icon{
	text-align: center;
    background-color: #5891ff;
    border-radius: 50%;
    font-size: 40px;
    color: white;
    width: 100px;
    height: 100px;
    margin: auto;
    margin-bottom: 50px;
    line-height: 100px;
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 900px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}

.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .form-icon{
        width: 70px;
        height: 70px;
        font-size: 30px;
        line-height: 70px;
    }
}
    </style>
    @livewireStyles
</head>
<body>
    @include('layouts.partiales.header') 
    <div class="registration-form"><br><br><br>
        <form action="{{route('ajouter.store')}}" method="post">
            @csrf
            <div class="center">
                <h1 style="color: #5791ff; text-align:center;font-family: system-ui;">Post Job</h1>
            </div><br>
            <div class="form-group">
                <input type="text" name="titre" class="form-control item" id="titre" placeholder="titre" required>
            </div>
            @livewire('domain-with-sousdomain')
            <div class="form-group">
                <textarea name="description" class="form-control item" id="birth-date" required placeholder="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Create</button>
            </div>
        </form>
    </div>
    @include('layouts.partiales.footer')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2()
        });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="{{asset('dist/js/BsMultiSelect.js')}}"></script>
<script>
$("select").bsMultiSelect({cssPatch : {
                   choices: {columnCount:'3' },
                }});
</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <!--end::Page Scripts-->


    <script>
        $(function() {
            let copyButtonTrans = '{{ trans('COPY') }}'
            let csvButtonTrans = '{{ trans('CSV') }}'
            let excelButtonTrans = '{{ trans('EXCEL') }}'
            let pdfButtonTrans = '{{ trans('PDF') }}'
            let printButtonTrans = '{{ trans('PRINT') }}'
            let colvisButtonTrans = '{{ trans('COLVIS') }}'

            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    @if (app()->getLocale() === 'fr')
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
                    @endif
                        @if (app()->getLocale() === 'en')
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/English.json"
                    @endif
                        @if (app()->getLocale() === 'es')
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                    @endif
                        @if (app()->getLocale() === 'pt')
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese.json"
                    @endif
                },
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }, {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                    style:    'multi+shift',
                    selector: 'td:first-child'
                },
                order: [],
                scrollX: true,
                pageLength: 100,
                dom: 'lBfrtip<"actions">',
                buttons: [
                    {
                        extend: 'copy',
                        className: 'btn-default',
                        text: copyButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn-default',
                        text: csvButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn-default',
                        text: excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn-default',
                        text: pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn-default',
                        text: printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-default',
                        text: colvisButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    }
                ]
            });

            $.fn.dataTable.ext.classes.sPageButton = '';
        });
        var elmt = document.getElementById('domain');
        var formData = new FormData();



        var values = new Array();
        $(document).ready(function(){
        $("#domain").change(function(){
          values.push($(this).children('option:selected').val());
          alert(values);
          formData.append('_token', $('[name=_token]').val());
          formData.append('domain',values);
             
        var method = '{!! route('view') !!}';
        alert(method);
        $.ajax({
	        url: method,
            type: 'POST',
            data:formData,
            dataType: 'json',
            success: function (data) {
	         alert(data);

            },
            error: function (e) {
                alert(e.responseJSON);
            }
        });
      });
      
    });
    </script>

@livewireScripts
</body>
</html>
