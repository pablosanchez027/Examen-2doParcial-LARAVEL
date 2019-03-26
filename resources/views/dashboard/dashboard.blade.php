@extends('layouts.default')
@section('titulo_pagina','Examen | Dashboard')
@section('titulo','Examen')
@section('contenido')
<div class="row text-center">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Examen</h3>
            </div>
            <div class="box-body text-center">
                <form method="POST" action="" enctype="multipart/form-data" id="frmActualizarPerfil">
                    <div class="form-group col-md-2 col-md-offset-5 ">
                        <label>Escribe una palabra</label>
                        <input name="palabra" class="form-control" type="text" id="palabra">
                    </div>
                    <div class="form-group col-md-2 col-md-offset-5 ">
                        <span class="palindrome" id="yPalindrome"></i> Es un palíndromo</span>
                        <span class="palindrome" id="nPalindrome"></i> No es un palíndromo</span>
                    </div>
                    <div class="form-group col-md-2 col-md-offset-5 ">
                        <button type="button" class="btn btn-primary" id="btnEvaluar">Evaluar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    function doClickEvaluar(event) {
        $.get("/api/palindrome/" + $("#palabra").val(),
            function (data) {
                if (data == 1) {
                    $("#yPalindrome").show();
                    $("#nPalindrome").hide();
                }
                else {
                    $("#nPalindrome").show();
                    $("#yPalindrome").hide();
                }
            });
    }

    $(function () {
        $(".palindrome").hide();
        $("#btnEvaluar").click(doClickEvaluar);
    });
</script>
@endsection