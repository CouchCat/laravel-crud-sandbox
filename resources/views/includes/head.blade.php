<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" media="screen" title="no title">

<!-- Scripts -->
<script>
window.Laravel = <?php echo json_encode([
  'csrfToken' => csrf_token(),
]); ?>
</script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
