<style>
    .alert {
        position: fixed !important;
        right: 10px;
        bottom: 20px;
    }
</style>
@if($tipo == 'erro')
<div class="alert alert-danger" role="alert" id="erro">
    {{ $slot }}
</div>
@elseif($tipo == 'info')
<div class="alert alert-primary" role="alert" id="info">
    {{ $slot }}
</div>
@elseif($tipo == 'alert')
<div class="alert alert-warning" role="alert" id="alert">
    {{ $slot }}
</div>
@endif
<script>
$(function(){
    $("#{{ $tipo }}").slideDown('slow');
    $('.alert').click(function(e){
        $(this).fadeOut('slow');
    });
});
</script>
