 
	<div id="page-wrapper">
		
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo lang('dashboard') ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
            <div class="row">
                <div class="col-lg-3 col-md-6">
                   <a href="<?php echo site_url('admin/calendarlist'); ?>">
					   <div class="panel panel-red"> 
							<div class="panel-heading">
								<div class="row"> 
									<div class="col-xs-3">
										<i class="fa fa-calendar fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $events_count; ?></div>
										<div><?php echo lang('calendar') ?> <?php echo lang('events') ?></div>
									</div>
								</div> 
							</div> 
						</div>
					</a>
                </div>
                <div class="col-lg-3 col-md-6">
                   <a href="<?php echo site_url('admin/queuelist'); ?>">
					   <div class="panel panel-mocha"> 
							<div class="panel-heading">
								<div class="row"> 
									<div class="col-xs-3">
										<i class="fa fa-calendar-check-o fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $events_queue; ?></div>
										<div><?php echo lang('calendar_message_queue') ?></div>
									</div>
								</div> 
							</div> 
						</div>
					</a>
                </div>					
                <div class="col-lg-3 col-md-6">
                   <a href="<?php echo site_url('admin/userslist'); ?>">
					   <div class="panel panel-blue"> 
							<div class="panel-heading">
								<div class="row"> 
									<div class="col-xs-3">
										<i class="fa fa-users fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $users_count; ?></div>
										<div><?php echo lang('users') ?></div>
									</div>
								</div> 
							</div> 
						</div>
					</a>
                </div>				
                 <div class="col-lg-3 col-md-6">
                   <a href="<?php echo site_url('admin/settings'); ?>">
					   <div class="panel panel-green"> 
							<div class="panel-heading">
								<div class="row"> 
									<div class="col-xs-3 ">
										<div class="hero hero-moment hero-circle">
											<div class="hero-face">
												<div id="hour" class="hero-hour"></div>
												<div id="minute" class="hero-minute"></div>
												<div id="second" class="hero-second"></div>
												<div id="ampm" class="hero-ampm"></div>
											</div>
										</div>	 
									</div>
									<div class="col-xs-9 text-right">
										<div id="date" class="huge"> </div>
										<div><div id="timezone" > </div></div>
									</div>
								</div> 
							</div> 
						</div>
					</a>
                </div>	   
            </div>
            <!-- /.row -->
			
			
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <i class="fa fa-calendar fa-fw"></i> <?php echo lang('calendar') ?>
                            <div class="pull-right">
                                <div class="btn-group">
									<a href="<?php echo site_url('admin/calendarlist'); ?>" class="btn btn-default btn-xs" ><i class="fa fa-pencil-square-o"></i> <?php echo lang('edit') ?></a>
                                </div>			 
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="calendar"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
           
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-blue">
                        <div class="panel-heading">
                            <i class="fa fa-user fa-fw"></i> <?php echo lang('users') ?>
                            <div class="pull-right">
                                <div class="btn-group">
									<a href="<?php echo site_url('admin/userslist'); ?>" class="btn btn-default btn-xs" ><i class="fa fa-pencil-square-o"></i> <?php echo lang('edit') ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						
							<div class="list-group">
								<div class="pull-left "><?php echo lang('username') ?></div>
								<div class="pull-right "><?php echo lang('profile_signup_date') ?></div> 
							</div>
                            <div class="list-group panel-user">
								<?php foreach ($users_list as $result): ?>	
									<a href="<?php echo site_url($result->uname); ?>" class="list-group-item"> 
										<img src="<?php echo base_url();?>assets/img/profile/<?php echo $result->image ?>" class="pull-left fa-fw" >
										<?php if($result->logged_in == 1): ?>
											<h5 class="list-group-item-heading"> <strong class="text-success" ><?php echo $result->uname ?></strong></h5>
										<?php elseif($result->logged_in == 0): ?>
											<h5 class="list-group-item-heading"> <?php echo $result->uname ?></h5>
										<?php endif ?>
										<p class="list-group-item-text text-muted small"><em class="pull-right"><?php echo relativeTime($result->signupdate); ?></em></p>
									</a> 
								<?php endforeach ?>	 
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

				</div>
				<!-- /.col-lg-4 -->
            
                <div class="col-md-12 col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <i class="fa fa-location-arrow fa-fw"></i> <?php echo lang('locations_all_heading') ?>
                            <div class="pull-right">
								<div class="btn-group">
									<a href="<?php echo site_url('admin/maplist'); ?>" class="btn btn-default btn-xs" ><i class="fa fa-pencil-square-o"></i> <?php echo lang('edit') ?></a>
                                </div>	
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div id="gmapsCanvas2" style="height: 400px; width: 100%"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
           
                </div>
                <!-- /.col-md-12 .col-lg-12 -->			
			
			
			</div>
            <!-- /.row -->
 

    </div>
    <!-- /#wrapper -->
	
	
		<div class="modal" id="viewEventModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content"> 
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="text-danger fa fa-times"></i></button>
						<h3 id="myModalLabel2"><i class="fa fa-calendar col-md-1"></i><span id="ic_event_title"></span></h3> 
						<div class="control-group"> 
							<div class="controls controls-row" role="alert" id="when"  >
							</div>	 
						</div>	 
					</div>
					<div class="modal-body">  
					
					  <div class="item active">
						
						  <div class="row"> 
							<div class="col-md-12 col-sm-12">
								<blockquote>
								  <p><div class="controls controls-row" role="alert" id="ic_event_desc"></div></p>
								</blockquote>
							  <i><div id="ic_event_urllink"></div></i>
							  <address><div id="ic_event_location"></div></address>	
							  <i><div id="filename"></div></i>
							  <small><?php echo lang('by') ?> <div id="user"></div></small>
							</div>
						  </div>
						
					  </div>	 
						  
					 <div class="clearfix"></div>
					</div> 
					<div class="modal-footer">  
						<div class="btn-group pull-left">
							<div class="btn btn-success btn-xs pull-left" id="gexport"></div>
							<div class="btn btn-success btn-xs pull-left" id="yexport"></div>	
							<div class="btn btn-success btn-xs pull-left" id="lexport"></div>						  
						</div>
						<div class="btn-group pull-right">
							<div class="pull-right" id="ic_event_allday"  >
							</div>		
						</div>  
					</div>
				</div>
			</div>
		</div>	
 	
 