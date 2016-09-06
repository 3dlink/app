<div class="Group index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Groups</legend>
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
                  <buttom onclick="window.location.href=WEBROOT+'groups/add';" class="btn btn-primary">Add Group</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Destination</th>
                  <th>Trip Date</th>
                  <th>Trip Start Day</th>
                  <th>Group Creator</th>
                  <th></th>
                  
                  <th></th>
                </th>

                <?php foreach ($groups as $item): ?>
					<tr>
	           <td><?php echo h($item['Group']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Destination']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Group']['date_trip']); ?>&nbsp;</td>
	           <td><?php echo h($item['Group']['start_trip']); ?>&nbsp;</td>
	           <td><?php echo h($item['User']['username']); ?>&nbsp;</td>
						
                        <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>groups/edit/<?php echo $item['Group']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>groups/delete/<?php echo $item['Group']['id'];?>" onclick="if (confirm(&quot;Are you sure you want to delete the group?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
	  	                      <a href="<?php echo $this->webroot;?>groups/view/<?php echo $item['Group']['id'];?>" title="Ver Detalles" class="menuTable">
                              	<span class="glyphicon glyphicon-eye-open"></span></a>


                              	<?php if($item['Group']['joined'] == '1'){ ?>
                                <a href="<?php echo $this->webroot;?>personals/makeinactive/<?php echo $item['Group']['id'];?>" title="Quitar de home" class="menuTable">
                                <span class="glyphicon glyphicon-thumbs-down"></span></a>
                              	<?php }else{ ?>
                                <a href="<?php echo $this->webroot;?>personals/makeactive/<?php echo $item['Group']['id'];?>" title="Agregar a home" class="menuTable">
                                <span class="glyphicon glyphicon-thumbs-up"></span></a>
                              	<?php } ?>



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
<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} Groups of {:count}  total.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	