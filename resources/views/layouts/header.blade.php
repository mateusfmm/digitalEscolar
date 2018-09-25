				<div class="navbar-header pull-left">
					<a href="/home" class="navbar-brand">
						<small>
							<i class="fa fa-bus"></i>
							Digitar Escolar
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i data-count="0" class="ace-icon fa fa-bell icon-animated-bell"></i>
									<span class="badge badge-important notif-count"></span>
							</a>

							<ul id="notification-list" class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header" data-toggle="dropdown">
									<i data-count="0" class="ace-icon fa fa-exclamation-triangle">
										<span class="notif-count"></span>
									</i>
								</li>

								<li class="dropdown-footer">
									<a href="notifications">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
                            @endguest
						</li>
					</ul>
				</div>


				<script type="text/javascript">

					 var notificationList = $('#notification-list');
					 var notificationsToggle = notificationList.find('[data-toggle]');
                    var notificationsCountElem = notificationsToggle.find('i[data-count]');
                    var notificationsCount = parseInt(notificationsCountElem.data('count'));

               //     if (notificationsCount <= 0) {
                 //       notificationsWrapper.hide();
                   // }

                    // Enable pusher logging - don't include this in production
                    // Pusher.logToConsole = true;

                    var pusher = new Pusher('110834e54625e7fa021c', {
                        encrypted: true
                    });

                    // Subscribe to the channel we specified in our Laravel Event
                    var channel = pusher.subscribe('notification-driver');

                    // Bind a function to a Event (the full Laravel class)
                    channel.bind('App\\Events\\NotificationEvent', function (data) {

                        var userid = data.user.id;

                        $('#notification-list').append('<li>' +
                            '<a href="notifications/get/'+userid+'" href="#" aria-expanded="false">\n' +
                            '<i class="ace-icon fa fa-bell"></i>\n' +
                            '<span class="badge badge-important">'+ data.message.name +'</span>\n' +
                            '</a>\n' +
                            '</li>');

                        notificationsCount += 1;
                        notificationsCountElem.attr('data-count', notificationsCount);
                        $('.notif-count').text(notificationsCount);
                    });


				</script>
