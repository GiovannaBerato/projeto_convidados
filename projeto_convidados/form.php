<html>
<form action="">
    <input type="text" id="nome"/>
    <input type="button" value="Preencher campo" onclick="preencherCampo()">

<script>
    function preencherCampo(){
        // var nome = document.getElementById("nome").value;
        document.getElementById("nome").setAttribute("value", "ALOALOALO");
    }

</script>
</form>
</html>