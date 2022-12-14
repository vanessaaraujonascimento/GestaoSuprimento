<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.2';
include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid Texto">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">

                            <!-- Sub Título -->
                            <p class="SubTitulo"> Recebimento por Nota Fiscal </p>
                            <hr>

                            <br>

                            <p>O recebimento por Nota Fiscal somente deve ser utilizado na impossibilidade do recebimento por Ordem de Compra, vale ressaltar que uma vez registrado por intermédio de Nota Fiscal um recebimento originário de Ordem Compra, a atualização do saldo da Ordem de Compra ficará comprometido impossibilitando o acompanhamento do atendimento da respectiva compra.
                            <br><br>Para efetuar o registro por intermédio de Nota Fiscal o "Perfil Almoxarife" deve executar na barra de menu o comando: <strong>"Movimentos, Almoxarifado, Entrada, Por Nota Fiscal"</strong>.</p>
                            <br>
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura129.png" data-bs-toggle="modal" data-bs-target="#Imagem129">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura129.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 129 - MODAL -->
                            <div class="modal fade text-center" id="Imagem129" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura129.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 129</strong> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 129 - End --><br>

                            <p>Ao executar o comando na barra de menu o SIGA/SGBM apresentará a tela de "Entrada por Nota Fiscal", para preenchimento dos seguintes campos:</p><br>

                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.No campo "CNPJ Fornecedor" deve ser digitado o número do CNPJ do Fornecedor constante na Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Acionar o botão "Pesquisar" e o SIGA/SGBM procurará no CRC - Certificado de Registro Cadastral o respectivo fornecedor proprietário do CNPJ informado, de forma que sárárpossárel dar entrada de materiais em estoque de fornecedores que estejam previamente cadastrados no CRC.</li>

                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura130.png" data-bs-toggle="modal" data-bs-target="#Imagem130">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura130.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 130 - MODAL -->
                                <div class="modal fade text-center" id="Imagem130" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura130.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 130</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 130 - End -->
                                <br>

                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Acionado o botão "Pesquisar" o SIGA/SGBM apresentará a "Razão Social do Fornecedor" originária do CRC e o botão "Alterar" possibilitará alterar o CNPJ para efetuar a pesquisa de outro CNPJ.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo Nota Fiscal informar o número da Nota Fiscal que está sendo registrada.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Número de série" informar a série da Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "valor total da Nota Fiscal" informar o valor total da Nota. Essa informação ficará como parâmetro de consistência do registro da Nota Fiscal, a cada item da Nota registrado, o SIGA/SGBM efetuará o somatório e confrontará com o total da Nota informado. O SIGA/SGBM só finaliza o registro se o somatório dos valores dos itens for igual ao total da Nota informado.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Data Emissão" informar a data de emissão da Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Nota de Empenho" informar o número do empenho que gerou a respectiva Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Data Entrada" informar a data de entrada que deverá  ser maior que a data de emissão da Nota. </li>
                                <li class="wow fadeInLeft" data-wow-delay="2.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Observação" registrar informações que considerar importante, por exemplo quem conferiu e atestou o recebimento da Nota.</li>

                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura131.png" data-bs-toggle="modal" data-bs-target="#Imagem131">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura131.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 131 - MODAL -->
                                <div class="modal fade text-center" id="Imagem131" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura131.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 131</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 131 - End -->
                                <br>


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Selecionar a forma de pesquisa no SIGA/SGBM do item constante na Nota Fiscal, se a pesquisa será efetuada por "código" ou por "palavra-chave".</li>

                                <br>
                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <p class="FiqueAtentoTexto"> É recomendável que a pesquisa seja efetuada por "código" e que o código seja previamente pesquisado no "Catálogo de Bens Materiais e Serviços" do Governo do Estado do Ceará. </p>
                                </div>
                                <br>


                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Na caixa de texto logo após o item de seleção (código ou palavra-chave) preencher com o número do código ou com a palavra chave que direcionará  a pesquisa do SIGA/SGBM.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Para efetuar a pesquisa clicar no botão "Pesquisar".
                                <br>Vale ressaltar que a pesquisa está direcionada para os itens já cadastrados no SIGA/SGBM. Poderá haver casos em que o item constar no Catálogo mas não ter sido ainda cadastrado no SIGA/SGBM, nesse caso o cadastro poderá ser feito no antes da inclusão do item na Nota por intermédio do comando <strong>"Manutenção, Almoxarifado, Material, Consulta/Cadastro"</strong> executado na barra de menu.</li>

                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura132.png" data-bs-toggle="modal" data-bs-target="#Imagem132">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura132.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 132 - MODAL -->
                                <div class="modal fade text-center" id="Imagem132" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura132.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 132</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 132 - End -->
                                <br>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Uma vez acionado o botão "Pesquisar" o SIGA/SGBM apresentará a tela de seleção de produto trazendo o item resultante da pesquisa em uma grade constando o "Código", "Descrição", "Tipo Material", "Fator Multiplicador", "Qtde Estoque" e "Unidade de Consumo". Clicar no quadrículo na frente do campo "Cód" selecionando o item que dará entrada pela Nota Fiscal.</li>

                                <br>
                                <!-- Fique Atento -->
                                <div class="FiqueAtentoCaixa">
                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                    <p class="FiqueAtentoTexto"> É importante analisar os referidos dados identificando a existência de "Fator Multiplicador" maior que "1". Nesses casos é importante certificar que a quantidade a ser registrada refere-se a mesma quantidade conferida fisicamente de forma a evitar erros de registro. é comum ocorrer situações em que a quantidade especificada na Nota Fiscal refere-se a unidades e o cadastro do item no sistema consta "Unidade de Fornecimento" aglutina em "Caixa", "Fardo" ou outra unidade de conjunto, cujo o "Fator Multiplicador" é maior que "1". </p>
                                </div>
                                <br>

                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Quantidade" informar a quantidade do item constante na Nota Fiscal utilizando 4 casas decimais.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. No campo "Valor" informar o valor unitário do item constante na Nota Fiscal.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Acionar o botão "Adicionar" para incluir o item no registro de entrada da Nota Fiscal.</li>

                                <br>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura133.png" data-bs-toggle="modal" data-bs-target="#Imagem133">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura133.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                
                                <!-- Imagem 133 - MODAL -->
                                <div class="modal fade text-center" id="Imagem133" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura133.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 133</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 133 - End -->
                                <br>


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação.Uma vez acionado o botão "Adicionar", na tela anterior, o SIGA/SGBM apresentará uma grade contendo as seguintes informações: "Código", "Material", "Unidade de Fornecimento", "Unidade de Consumo", "Qtde Entrada", "Valor Entrada", "Fator Multiplicador" , "Quantidade Final", "Valor Unitário Final", "Valor total" e "Ação".</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Por intermédio dos campos de seleção (especificados nos itens 11 a 13 anteriores) poderão ser acrescidos mais itens na Nota Fiscal em questão.</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Nos campos "Quantidade Final", "Valor Unitário Final" e "Valor Total" é  apresentado na cor vermelha a quantidade e valor unitário do item convertidos a partir da aplicação do "Fator Multiplicador". Tais valores serão diferentes dos valores informados quando a "Unidade de Fornecimento" for diferente da "Unidade de Consumo" por exemplo: Unidade de Fornecimento = Caixa com 10 unidades, Unidade de Consumo = Unidade, nesse caso a Quantidade será multiplicada por 10 e o Valor Unitário dividido por 10 resultado da conversão da Caixa em Unidades. Uma vez confirmada a ação de entrada da Nota os valores convertidos são os que efetivamente entrarão no estoque.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Na coluna "Ação"  clicar no item no formato de "Lápis", caso se fará necessário editar  novamente os dados de "Quantidade" ou "Preço Unitário" .</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.6s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Clicando no ícone em formato de "X" fará a exclusão da operação de registro da Nota.</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.9s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. A medida que são registrados itens na grade é acrescido o Valor Total que será confrontado internamente pelo sistema com o "Total de Nota" informado no campo 06 anterior.</li>
                                <li class="wow fadeInLeft" data-wow-delay="2.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Acionar o botão "Salvar" para gravar a Nota Fiscal mesmo que o registro não esteja conclusão, podendo novamente ser editada.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura134.png" data-bs-toggle="modal" data-bs-target="#Imagem134">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura134.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 134 - MODAL -->
                                <div class="modal fade text-center" id="Imagem134" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura134.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 134</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 134 - End --><br>


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Acionado o botão "Salvar" o SIGA/SGBM apresentará uma mensagem de gravação da Nota Fiscal que deverá ser "finalizada" por intermédio procedimento especárico. A Nota Fiscal somente será registrada após ser "Finalizada", para salvar a Nota Fiscal acionar o botão "OK".</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura135.png" data-bs-toggle="modal" data-bs-target="#Imagem135">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" src="imagens/Figura135.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 135 - MODAL -->
                                <div class="modal fade text-center" id="Imagem135" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura135.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 135</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 135 - End --><br>


                                <li class="wow fadeInLeft" data-wow-delay="0.3s">Uma vez acionado o botão "Pesquisar" o Siga/Sgbm apresentará a grade "Materiais encontrados", com um único item, demonstrando os campos: Código, Descrição, Tipos de Material, Unidade de Fornecimento e Ação. Acionado o botão "OK" o SIGA/SGBM apresentará um resumo do registro disponibilizando botões para "Editar" ou "Excluir" a Nota em questão como tambár registrar uma nova Nota Fiscal.</li>

                                <br><!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura136.png" data-bs-toggle="modal" data-bs-target="#Imagem136">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura136.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 136 - MODAL -->
                                <div class="modal fade text-center" id="Imagem136" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura136.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 136</strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 136 - End -->  
                            </ol>
   
          
                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->
                    
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico03.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>

