<?php
    require_once("agency.crud.php");

    $imagem = $_POST['inputImagem'];
    $titulo = $_POST['inputTitulo'];
    $subheading = $_POST['inputSubheading'];

    if(cadastrarHome($imagem, $titulo, $subheading))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: ../home.form.php?error=true');
    exit;