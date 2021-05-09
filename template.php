<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">

</head>

    <div class="container">
    <div class="container p-3 my-3 bg-info text-white">
    <div class="text-center">

    
    <img class="img-fluid" src="img/logo.jpg" alt="logo" width="360" height="845"> 
    </div>
       
        <form class="formulario">
        <em> <strong> <h5><p  class="text-danger">DADOS PARA ENTREGA</p></h5></strong></em>

            <fieldset>
                <fieldset class="grupo">
                    <div class="campo">
                    
                    

                        <label for="nome"> Seu Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu Nome*" style="width: 30em">
                    </div>

                    <div class="campo">
                        <label for="telefone"> Seu Telefone:</label>
                        <input type="text" id="telefone" name="telefone" placeholder="*Digite seu Telefone*"style="width: 20em">
                    </div>

                </fieldset>

                <div class="campo">
                    <label for="endereco"> Seu Endereço:</label>
                    <input type="text" id="endereco" name="endereco" placeholder="*Digite seu Endereço*" style="width: 53em">
                </div>


                <fieldset class="grupo">

                    <div class="campo">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" style="width: 20em">
                    </div>

                    <div class="campo">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado">
                            <option>--</option>
                            <option value="RJ">RJ</option>
                            <option value="SP">SP</option>
                            <option value="CE">CE</option>
                        </select>
                    </div>
                </fieldset>


                <div class="campo radiobox">
                
                            <br>
                            <em> <strong> <h5><p class="text-danger">TAMANHOS</p></h5></strong></em>
                            <p>
                                <input type="radio" name="tamanho" id="P" value="P" checked><label for="P">P</label>
                                <input type="radio" name="tamanho" id="M" value="M"><label for="M">M</label>
                                <input type="radio" name="tamanho" id="G" value="G"><label for="G">G</label>

                            <div class="campo">
                          <em> <strong> <h5><p class="text-danger">SABORES</p></h5></strong></em>

                                <select name="sabores" id="sabores">
                                    <option>--</option>
                                    <option value="calabreza">Calabreza</option>
                                    <option value="frango">Frango com Catupiry</option>
                                    <option value="quatro">Quatro Queijos</option>
                                    <option value="casa">Moda da Casa</option>
                                </select>
                            </div>

                            <div class="campo radiobox">
                            <em> <strong> <h5><p  class="text-danger">BORDAS</p></h5></strong></em>
                                <p>
                                    <input type="radio" name="bordas" id="normal" value="normal" checked><label for="normal">Normal</label>
                                    <br>
                                    <input type="radio" name="bordas" id="cheddar" value="cheddar"><label for="cheddar">Cheddar</label>
                                    <br>
                                    <input type="radio" name="bordas" id="catupiry" value="catupiry"><label for="catupiry">Catupiry</label>

                            </div>
                            <br>

                            <label for="pagamento">FORMA DE PAGAMENTO</label>

                            <select name="pagamento" id="pagamento">
                                <option>--</option>
                                <option value="dinheiro">Dinheiro</option>
                                <option value="credito">Cartão de Crédito</option>
                                <option value="debito">Débito</option>
                            </select>
                       

                            <label for="nome"> Troco Para</label>
                            <input type="text" id="troco" name="troco" placeholder="*Digite o troco*" style="width: 10em">
                               
                                                        
                            </select>

                            <button type="submit" id="btn" class="mt-3 d-block btn btn-danger">REALIZAR PEDIDO</button>
                            
</div>
</body>
</form>
</html>
</div>

<br>
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Tamanho</th>
            <th>Sabores</th>
            <th>Bordas</th>
            <th>Pagamento</th>
            <th>Troco</th>

        </tr>
    </thead>
    <tbody>
        
            <?php

           $sqlBusca = "SELECT * FROM tb_pizzarias";
            $resultado = mysqli_query($conexao, $sqlBusca);

            $sistemaPizzaria = [];

            while($pizzaria = mysqli_fetch_assoc($resultado)) {
                $sistemaPizzaria[] = $pizzaria;
            }
            foreach($sistemaPizzaria as $pizzaria): ?>
       <tr>
            <td><?php echo $pizzaria['nome']; ?></td>
            <td><?php echo $pizzaria['telefone']; ?></td>
            <td><?php echo $pizzaria['endereco']; ?></td>
            <td><?php echo $pizzaria['cidade']; ?></td>
            <td><?php echo $pizzaria['estado']; ?></td>
            <td><?php echo $pizzaria['tamanho']; ?></td>
            <td><?php echo $pizzaria['sabores']; ?></td>
            <td><?php echo $pizzaria['bordas']; ?></td>
            <td><?php echo $pizzaria['pagamento']; ?></td>
            <td><?php echo $pizzaria['troco']; ?></td>
        </tr>

        
    <?php endforeach; ?>
    </tbody>
</table>
</div>


<script src="bootstrp-5/bootstrap.bundle.min.js"></script>
<script src="js/funcoes.js"></script>

</body>

</html>