<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/trumbowyg/ui/trumbowyg.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/trumbowyg.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/langs/pt_br.js"></script>

<style>
    .ui-datepicker {
        z-index: 99999 !important;
    }

    .trumbowyg-box {
        margin-top: 0;
        margin-bottom: 0;
    }

    textarea {
        resize: vertical;
    }
</style>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-diagnoses"></i>
                </span>
                <h5>Acompanhamento de comissão</h5>
                <div class="buttons">
                   
<!--                    <a title="Visualizar" class="button btn btn-primary" href="<?php echo site_url() ?>/os/visualizar/">
                      <span class="button__icon"><i class="bx bx-show"></i></span><span class="button__text">Visualizar</span></a>-->
                </div>
            </div>
            <div class="widget-content nopadding tab-content">
                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes do Ag.</a></li>
<!--                        <li id="tabProdutos"><a href="#tab2" data-toggle="tab">Produtos</a></li>-->
                        
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="span12" id="divCadastrarOs">
                                <?php
                                $mes = date('M');
                                $mes_extenso = array(
                                        'Jan' => 'Janeiro',
                                        'Feb' => 'Fevereiro',
                                        'Mar' => 'Março',
                                        'Apr' => 'Abril',
                                        'May' => 'Maio',
                                        'Jun' => 'Junho',
                                        'Jul' => 'Julho',
                                        'Aug' => 'Agosto',
                                        'Nov' => 'Novembro',
                                        'Sep' => 'Setembro',
                                        'Oct' => 'Outubro',
                                        'Dec' => 'Dezembro'
                                    );
                                ?>
                                   
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <h3>Comissões: <?php echo $mes_extenso["$mes"]; ?>
                                            
                                        </h3>
                                        
                                    </div>
                                    
                                    <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Cliente</th>
                                            <th class="ph1">Responsável</th>
                                            <th>Data</th>
                                            <th class="ph2">Horário</th>
                                            <th class="ph3">Profissional</th>
                                            <th>Valor</th>
                                            <th class="ph4">Status da comissão</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        if (!$results) {
                                            echo '<tr>
                                                    <td colspan="10">Nenhuma comissao</td>
                                                  </tr>';
                                        }
                                        if(!empty($results)){
                                            //var_dump($results);
                                            $totalComissao = 0;
                                        foreach ($results as $r) {
                                            
                                            switch ($r->statusComissao) {
                                                
                                                case 'Pendente':
                                                    $cor = '#CD0000';
                                                    break;
                                                case 'Pago':
                                                    $cor = '#808080';
                                                    break;
                                                default:
                                                    $cor = '#E0E4CC';
                                                    break;
                                            }
                                            
                                            echo '<tr>';
                                            echo '<td>'.$r->idComissao.'</td>';
                                            echo '<td>'.$r->nomeCliente.'</td>';
                                            echo '<td>'.$r->nome.'</td>';
                                            echo '<td>'. date(('d/m/Y'), strtotime($r->dataFinal)).'</td>';
                                            echo '<td>'.$r->horario.'</td>';
                                            echo '<td>'.$r->funcionario.'</td>';
                                            echo '<td> R$ '.$r->valor.'</td>';
                                            //echo '<td>'.$r->statusComissao.'</td>';
                                            echo '<td><span class="badge" style="background-color: ' . $cor . '; border-color: ' . $cor . '">' . $r->statusComissao . '</span> </td>';
                                            echo '</tr>';
                                          $totalComissao = $totalComissao+$r->valor; 
                                        }} ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6" style="text-align: right; color: green"><strong>Total de comissão a receber:</strong></td>
                                            <td colspan="2" style="text-align: left; color: green">
                                                <strong>R$ <?php echo number_format($totalComissao, 2, ',', '.') ?></strong>
                                            </td>
                                        </tr>
                                        
                                    </tfoot>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

