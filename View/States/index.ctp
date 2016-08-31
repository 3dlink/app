<div class="States index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>States</legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
	              	<form class="right" role="search" method="get">
	                 <div class="input-group">
	                    <!-- <input type="text" class="form-control" placeholder="Buscar categories..." name="filtro">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	                    </span> -->
	                  </div>  
									</form>            
                </div>
              </div>
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <buttom onclick="window.location.href=WEBROOT+'states/add';" class="btn btn-primary">Add States</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Region</th>
                  <th>Country</th>
                  <th></th>
                  
                  <th></th>
                </th>

                <?php foreach ($states as $item): ?>
					<tr>
	           <td><?php echo h($item['State']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Region']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Country']['name']); ?>&nbsp;</td>
						
                        <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>states/edit/<?php echo $item['State']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>states/delete/<?php echo $item['State']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar el Personal?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
	  	                      <!-- <a href="<?php echo $this->webroot;?>states/view/<?php echo $item['State']['id'];?>" title="Ver Detalles" class="menuTable">
                              	<span class="glyphicon glyphicon-eye-open"></span></a> -->
                            <?php } ?>
		                    </div>                  
		                </td>
					</tr>
								<?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>
<p>
<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} States of {:count} total.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	