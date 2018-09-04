<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membership Application</title>
    <link rel="stylesheet" href="css/Footer-with-map.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>

<style>
    /* Credit to bootsnipp.com for the css for the color graph */
    .colorgraph
    {
        height: 5px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;
        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    }
</style>



<body>


<?php
include 'navbarNew2.php';
?>

<div class="container" style="margin-top: 150px;">

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form">
                <h2 class="text-center alert-danger" style="padding: 10px;">Apply for MIST Alumni membership.</h2>
                <hr class="colorgraph" style="margin-top: -10px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <label for="" style="color:#bfbdb3">First name: <span style="color: #ff564d;">*</span></label>
                        <div class="form-group">
                            <input type="text" name="firstName" id="first_name"
                                   class="form-control" placeholder="First Name" tabindex="1" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <label for="" style="color:#bfbdb3">Last name: <span style="color: #ff564d;">*</span></label>
                        <div class="form-group">
                            <input type="text" name="lastName" id="last_name" class="form-control"
                                   placeholder="Last Name" tabindex="2" required>
                        </div>
                    </div>
                </div>

                <label for="" style="color:#bfbdb3">Email: <span style="color: #ff564d;">*</span></label>
                <div class="form-group">
                    <input type="email" name="email" id="display_name" class="form-control"
                           placeholder="Email" tabindex="3" required>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <label for="" style="color:#bfbdb3">Date of Birth: <span
                                style="color: #ff564d;">*</span></label>
                        <div class="form-group">
                            <input type="date" name="dob" id="display_name" class="form-control"
                                   tabindex="1" required>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <label for="" style="color:#bfbdb3">Gender: <span style="color: #ff564d;">*</span></label>

                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" name="gender" checked>Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender">Female
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <label for="" style="color:#bfbdb3">Blood group: <span style="color: #ff564d;"></span></label>

                        <div class="form-group">
                            <select class="form-control myStyle" id="sel1" name="bloodGroup">
                                <option class="myStyle">A+</option>
                                <option class="myStyle">A-</option>
                                <option class="myStyle">O+</option>
                                <option class="myStyle">O-</option>
                                <option class="myStyle">B+</option>
                                <option class="myStyle">B-</option>
                                <option class="myStyle">AB+</option>
                                <option class="myStyle">AB-</option>
                            </select>
                        </div>
                    </div>

                </div>

                <label for="" style="color:#bfbdb3">Father's name: <span style="color: #ff564d;">*</span></label>
                <div class="form-group">
                    <input type="text" name="fatherName" id="display_name" class="form-control"
                           placeholder="father's name" tabindex="3" required>
                </div>

                <label for="" style="color:#bfbdb3">Mather's name: <span style="color: #ff564d;">*</span></label>
                <div class="form-group">
                    <input type="text" name="motherName" id="display_name" class="form-control"
                           placeholder="mother's name" tabindex="3" required>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <label for="" style="color:#bfbdb3">Year of graduation: <span style="color: #ff564d;">*</span></label>

                        <input type="number" id="yog" class="form-control" name="yearOfGraduation"
                               min="1900" max="2099" step="1" value="2017"/>

                    </div>




                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <label for="" style="color:#bfbdb3">Degree: <span style="color: #ff564d;">*</span></label>

                        <div class="form-group">
                            <select class="form-control myStyle" id="sel1" name="degree">
                                <option class="myStyle">BSc</option>
                                <option class="myStyle">MSc</option>
                                <option class="myStyle">Phd</option>

                            </select>
                        </div>
                    </div>



                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <label for="" style="color:#bfbdb3">Department: <span style="color: #ff564d;">*</span></label>

                        <div class="form-group">
                            <select class="form-control myStyle" id="sel1" name="degree">
                                <option value="Dept. of Computer Science & Engineering (CSE)">Dept. of Computer Science & Engineering (CSE)</option>

                                <option value="Dept. of Architecture (Arch)">Dept. of Architecture (Arch)</option>

                                <option value="Dept. of Urban & Regional Planning (URP)">Dept. of Urban & Regional Planning (URP)</option>

                                <option value="Dept. of Water Resources Engineering (WRE)">Dept. of Water Resources Engineering (WRE)</option>

                                <option value="Dept. of Civil Engineering (CE)">Dept. of Civil Engineering (CE)</option>

                                <option value="Dept. of Electrical & Electronic Engineering (EEE)">Dept. of Electrical & Electronic Engineering (EECE)</option>

                                <option value="Dept. of Biomedical Engineering (BME)">Dept. of Biomedical Engineering (BME)</option>


                                <option value="Dept. of Petroleum & Mineral Resources Engineering (PME)">Dept. of Petroleum & Mineral Resources Engineering (PMRE)</option>

                                <option value="Dept. of Mechanical Engineering (ME)">Dept. of Mechanical Engineering (ME)</option>

                                <option value="Dept. of Naval Architecture & Marine Engineering (NAME)">Dept. of Naval Architecture & Marine Engineering (NAME)</option>

                                <option value="Dept. of Industrial & Production Engineering (IPE)">Dept. of Industrial & Production Engineering (IPE)</option>

                            </select>
                        </div>
                    </div>

                </div>

                <label for="" style="color:#bfbdb3">Address: <span
                        style="color: #ff564d;">*</span></label>


                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="houseNo" id="display_name" class="form-control"
                                   tabindex="1" required placeholder="house no">
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                        <input type="text" name="roadNo" id="display_name" class="form-control"
                               tabindex="1" required placeholder="road no">
                    </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="city" id="display_name" class="form-control"
                                   tabindex="1" required placeholder="city">
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="district" id="display_name" class="form-control"
                                   tabindex="1" required placeholder="district">
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="postCode" id="display_name" class="form-control"
                                   tabindex="1" required placeholder="post code">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="form-group">
                            <input type="text" name="country" id="display_name" class="form-control"
                                   tabindex="1" required placeholder="country">
                        </div>
                    </div>

                </div>


                <label for="" style="color:#bfbdb3">Mobile: <span
                        style="color: #ff564d;">*</span></label>

                <div class="form-group">
                    <input type="text" name="mobileNo" id="display_name" class="form-control"
                           tabindex="1" required placeholder="mobile no(01*********)">
                </div>

                <label for="" style="color:#bfbdb3">Professional Information: Briefly state specialty/expertise area and experience(optional): <span
                        style="color: #ff564d;"></span></label>

                <div class="form-group">
                    <textarea name="personalExperties" class="form-control" rows="5"></textarea>
                </div>

                <label for="" style="color:#bfbdb3">Membership fee: <span
                        style="color: #ff564d;"></span></label>

                <div class="form-group">
                        <input type="text" class="form-control " disabled placeholder="permanent/associate membership(2000 tk)">
                </div>



                <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-md-9">
                        By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#"
                                                                                                               data-toggle="modal"
                                                                                                               data-target="#t_and_c_m">Terms
                            and Conditions</a> set out by this site, including our Cookie Use.
                    </div>
                </div>

                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6 pull-right">
                        <input type="submit" value="Apply"
                                                           class="btn btn-primary btn-block" tabindex="7"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">
                    <img src="images/funnyGif01.gif" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>


<?php
include 'footer.php';
?>

<script>
    $(function ()
    {
        $('.button-checkbox').each(function ()
        {

            // Settings
            var $widget = $(this),
                $button = $widget.find('button'),
                $checkbox = $widget.find('input:checkbox'),
                color = $button.data('color'),
                settings = {
                    on: {
                        icon: 'glyphicon glyphicon-check'
                    },
                    off: {
                        icon: 'glyphicon glyphicon-unchecked'
                    }
                };

            // Event Handlers
            $button.on('click', function ()
            {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();
            });
            $checkbox.on('change', function ()
            {
                updateDisplay();
            });

            // Actions
            function updateDisplay()
            {
                var isChecked = $checkbox.is(':checked');

                // Set the button's state
                $button.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $button.find('.state-icon')
                    .removeClass()
                    .addClass('state-icon ' + settings[$button.data('state')].icon);

                // Update the button's color
                if (isChecked)
                {
                    $button
                        .removeClass('btn-default')
                        .addClass('btn-' + color + ' active');
                }
                else
                {
                    $button
                        .removeClass('btn-' + color + ' active')
                        .addClass('btn-default');
                }
            }

            // Initialization
            function init()
            {

                updateDisplay();

                // Inject the icon if applicable
                if ($button.find('.state-icon').length == 0)
                {
                    $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
                }
            }

            init();
        });
    });
</script>


</body>
</html>