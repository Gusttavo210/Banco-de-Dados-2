<?php
    require_once("php/conexao.php");
# Create
function cadastrarHome($imagem, $titulo, $subheading) 
{
    $link = getConnection();

    $sql = "insert into Home (imagem, titulo, subheading) values ('{$imagem}', '{$titulo}', '{$subheading}')";
    
    $result = mysqli_query($link, $sql);

    mysqli_close($link);

    if($result)
        return true; # retorno quando ocorrer sucesso na inserção

    return false; # retorno padrão(default)
}

function cadastrarpost( $postitle, $postsubtitle, $data) 
{
    $link = getConnection();

    $sql = "insert into post(  posttilte , subtititle, data) values ( '{$postitle}', '{$postsubtitle}', '{$data}')";
    
    $result = mysqli_query($link, $sql);

    mysqli_close($link);

    if($result)
        return true;

    return false;
}

function cadastrarSobre( $descricao) 
{
    $link = getConnection();

    $sql = "insert into about( descricao) values ( '{$descricao}')";
    
    $result = mysqli_query($link, $sql);

    mysqli_close($link);

    if($result)
        return true;

    return false;
}


    # Retrieve
    function listaHome()
    {
        $link = getConnection();
        $sql = "select * from Home";

        $result = mysqli_query($link, $sql); # 0-N

        $listaHome = array();
        while($Home = mysqli_fetch_object($result))
        {
            array_push($listaHome, $Home);
        }

        mysqli_close($link);
        return $listaHome;
    }

    function listapost()
    {
        $link = getConnection();
        $sql = "select * from post";

        $result = mysqli_query($link, $sql);

        $listapost = array();
        while($post = mysqli_fetch_object($result))
        {
            array_push($listapost, $post);
        }

        mysqli_close($link);
        return $listapost;
    }

    function listaAbout()
    {
        $link = getConnection();
        $sql = "select * from about";

        $result = mysqli_query($link, $sql);

        $listaAbout = array();
        while($about = mysqli_fetch_object($result))
        {
            array_push($listaAbout, $about);
        }

        mysqli_close($link);
        return $listaAbout;
    }