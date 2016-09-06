<!-- <div class="forumqs index">
	<h2><?php echo __('Forumqs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('question'); ?></th>
			<th><?php echo $this->Paginator->sort('destination_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($forumqs as $forumq): ?>
	<tr>
		<td><?php echo h($forumq['Forumq']['id']); ?>&nbsp;</td>
		<td><?php echo h($forumq['Forumq']['question']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($forumq['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $forumq['Destination']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($forumq['User']['id'], array('controller' => 'users', 'action' => 'view', $forumq['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $forumq['Forumq']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $forumq['Forumq']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $forumq['Forumq']['id']), array(), __('Are you sure you want to delete # %s?', $forumq['Forumq']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Forumq'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumas'), array('controller' => 'forumas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foruma'), array('controller' => 'forumas', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
<div class="Forumq index">
 <!--List  Open-->
      <article class="card shadow-1">
      	
          <fieldset>
            <legend>Forum Questions</legend>
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
                  <buttom onclick="window.location.href=WEBROOT+'forumqs/add';" class="btn btn-primary">Add Subject</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Subject</th>
                  <th>By</th>
                  <th></th>
                  
                  <th></th>
                </th>

                <?php foreach ($forumqs as $item): ?>
					<tr>
	           <td><?php echo h($item['Forumq']['question']); ?>&nbsp;</td>
	           <td><?php echo h($item['User']['username']); ?>&nbsp;</td>
						
                        <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>forumqs/edit/<?php echo $item['Forumq']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>forumqs/delete/<?php echo $item['Forumq']['id'];?>" onclick="if (confirm(&quot;Are you sure you want to delete the subject?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
	  	                       <a href="<?php echo $this->webroot;?>forumqs/view/<?php echo $item['Forumq']['id'];?>" title="Ver Detalles" class="menuTable">
                              	<span class="glyphicon glyphicon-eye-open"></span></a>
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
<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} Questions of {:count}  total.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	