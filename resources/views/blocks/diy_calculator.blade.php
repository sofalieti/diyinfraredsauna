<div class="d-flex align-items-center">
    <h1 class="title">Build Your Sauna</h1>
    <a href="#" class="btn btn-outline-primary ml-auto" onclick="window.history.back();return false;"><i class="fas fa-arrow-left"></i> Back</a>
</div>
<ul class="stepper horizontal mt-3">
    <li class="step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <form class="f-validate">
                <h3>Configure your DIY Infrared Sauna</h3>
                <p class="description text-center"><br>Please enter width, depth and height of your future infrared sauna. <br>We offer many different ranges of voltage that can be applied to your DIY Kit. Voltage ranges from 110v all the way up to 240v.</p>
                <div class="row">
                    <div class="col-12">
                        <div class="ps-size-block">
                            <div class="ps-size mt-3">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-6 mb-3 mb-lg-0">
                                        <input class="form-control validate" required type="number" name="pc_width" placeholder="Width" value=""/>
                                    </div>
                                    <div class="col-lg-3 col-6 mb-3 mb-lg-0">
                                        <input class="form-control validate" required type="number" name="pc_depth" placeholder="Depth" value=""/>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <input class="form-control validate" required type="number" name="pc_height" placeholder="Height" value=""/>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <select class="form-control" name="pc_units">
                                            <option value="ft">ft.</option>
                                            <option value="inch">inch.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="pc_wv_info"></div>
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-6">
                                    <div id="pc_watts" style="display: none;"></div>                        
                                </div>
                                <div class="col-lg-3 col-6">
                                    <div id="pc_volts"></div>          
                                </div>
                            </div>
                        </div>
                        <p class="text-center mt-3 d-none">
                            <span style="font-weight: bold; font-size: 20px;">OR</span><br/>
                            choose from the ready-made solutions below
                        </p>
                        <div class="pc-note-block">
                            <label class="pc-note-desc">If you want to add any additional information about the sauna size or voltage, please do it here.</label>
                            <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
                        </div>
                    </div>
                    <div class="col-3 col-md-2 d-none">
                        <div class="layout-shape">
                            <div data-simplebar data-simplebar-auto-hide="false">
                                <img src="/images/calculator/alongthewalls.png" class="active" data-shape="shape-3"/><br/>
                                <img src="/images/calculator/leftside.png" data-shape="shape-4"/><br/>
                                <img src="/images/calculator/rightside.png" data-shape="shape-5"/><br/>
                                <img src="/images/calculator/double.png" data-shape="shape-1"/><br/>
                                <img src="/images/calculator/round.png" data-shape="shape-2"/><br/>
                                <img src="/images/calculator/corners1.png" data-shape="shape-6"/><br/>
                                <img src="/images/calculator/corners2.png" data-shape="shape-7"/><br/>
                                <img src="/images/calculator/corners3.png" data-shape="shape-8"/><br/>
                                <img src="/images/calculator/corners4.png" data-shape="shape-9"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-md-10 d-none">
                        <div class="row layouts active" id="shape-3">
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/3х4.png" class="w-100" data-width="4" data-depth="3" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/4х3.png" class="w-100" data-width="4" data-depth="3" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/4х5.png" class="w-100" data-width="5" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/4х6.png" class="w-100" data-width="6" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/6х5.png" class="w-100" data-width="6" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/7х5.png" class="w-100" data-width="7" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/7х6.png" class="w-100" data-width="7" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/8х6.png" class="w-100" data-width="8" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/8х7.png" class="w-100" data-width="8" data-depth="7" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/8х8.png" class="w-100" data-width="8" data-depth="8" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/10х6.png" class="w-100" data-width="10" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/alongthewalls/10х8.png" class="w-100" data-width="10" data-depth="8" data-height="7"/></div>
                        </div>
                        <div class="row layouts" id="shape-4">
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/3х4.png" class="w-100" data-width="4" data-depth="3" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/4х5.png" class="w-100" data-width="5" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/4х6.png" class="w-100" data-width="6" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/6х5.png" class="w-100" data-width="6" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/7х5.png" class="w-100" data-width="7" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/7х6.png" class="w-100" data-width="7" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/8х6.png" class="w-100" data-width="8" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/8х7.png" class="w-100" data-width="8" data-depth="7" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/8х8.png" class="w-100" data-width="8" data-depth="8" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/10х6.png" class="w-100" data-width="10" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/leftside/10х8.png" class="w-100" data-width="10" data-depth="8" data-height="7"/></div>
                        </div>
                        <div class="row layouts" id="shape-5">
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/3х4.png" class="w-100" data-width="3" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/4х5.png" class="w-100" data-width="5" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/4х6.png" class="w-100" data-width="6" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/6х5.png" class="w-100" data-width="6" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/7х5.png" class="w-100" data-width="7" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/7х6.png" class="w-100" data-width="7" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/8х6.png" class="w-100" data-width="8" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/8х7.png" class="w-100" data-width="8" data-depth="7" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/8х8.png" class="w-100" data-width="8" data-depth="8" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/10х6.png" class="w-100" data-width="10" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/rightside/10х8.png" class="w-100" data-width="10" data-depth="8" data-height="7"/></div>
                        </div>
                        <div class="row layouts" id="shape-1">
                            <div class="col-md-3 col-6"><img src="/images/calculator/double/8х6.png" class="w-100" data-width="8" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/double/8х7.png" class="w-100" data-width="8" data-depth="7" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/double/10х6.png" class="w-100" data-width="10" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/double/10х8.png" class="w-100" data-width="10" data-depth="8" data-height="7"/></div>
                        </div>
                        <div class="row layouts" id="shape-2">
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/4х5.png" class="w-100" data-width="5" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/4х6.png" class="w-100" data-width="6" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/6х5.png" class="w-100" data-width="6" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/7х5.png" class="w-100" data-width="7" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/7х6.png" class="w-100" data-width="7" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/8х6.png" class="w-100" data-width="8" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/8х7.png" class="w-100" data-width="8" data-depth="7" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/8х8.png" class="w-100" data-width="8" data-depth="8" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/10х6.png" class="w-100" data-width="10" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/round/10х8.png" class="w-100" data-width="10" data-depth="8" data-height="7"/></div>
                        </div>
                        <div class="row layouts" id="shape-6">
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners1/3х3.png" class="w-100" data-width="3" data-depth="3" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners1/4х4.png" class="w-100" data-width="4" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners1/5х5.png" class="w-100" data-width="5" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners1/6х6.png" class="w-100" data-width="6" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners1/7х7.png" class="w-100" data-width="7" data-depth="7" data-height="7"/></div>
                        </div>
                        <div class="row layouts" id="shape-7">
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners2/3х3.png" class="w-100" data-width="3" data-depth="3" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners2/4х4.png" class="w-100" data-width="4" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners2/5х5.png" class="w-100" data-width="5" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners2/6х6.png" class="w-100" data-width="6" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners2/7х7.png" class="w-100" data-width="7" data-depth="7" data-height="7"/></div>
                        </div>
                        <div class="row layouts" id="shape-8">
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners3/3х3.png" class="w-100" data-width="3" data-depth="3" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners3/4х4.png" class="w-100" data-width="4" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners3/5х5.png" class="w-100" data-width="5" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners3/6х6.png" class="w-100" data-width="6" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners3/7х7.png" class="w-100" data-width="7" data-depth="7" data-height="7"/></div>
                        </div>
                        <div class="row layouts" id="shape-9">
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners4/3х3.png" class="w-100" data-width="3" data-depth="3" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners4/4х4.png" class="w-100" data-width="4" data-depth="4" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners4/5х5.png" class="w-100" data-width="5" data-depth="5" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners4/6х6.png" class="w-100" data-width="6" data-depth="6" data-height="7"/></div>
                            <div class="col-md-3 col-6"><img src="/images/calculator/corners4/7х7.png" class="w-100" data-width="7" data-depth="7" data-height="7"/></div>
                        </div>
                    </div>
                </div>                
                <div class="step-actions">
                    <button class="btn btn-primary next-step">Continue</button>
                </div>
            </form>
        </div>
    </li>
    <li class="step next-step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Choise you heater type</h3>
            <p class="description text-center">Feel free to choise one or several heater types for you Infrared Sauna</p>
            <div id="kits_type"></div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about the heater type, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
                <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Select Control Panel type</h3>
            <p class="description text-center">Single Control Panel option allows you to have one control panel on either the outside or the inside of the sauna. The control panel allows you to manage temperature in Celsius and Fahrenheit, set timer up to 90 minutes, lights, and on/off power.<br /> Dual Control Panels allows you to have the convenience of having control panels on the outside of the sauna and the inside. This is very convenient and ideal for those that do not want to step outside of the sauna every time adjustments are needed.</p>
            <div class="pc-block pc-radio">
                <label class="active">
                    <img src="https://infraredsaunaparts.com/calc/images/cp/1.png"/><br/>
                    <input checked type="radio" name="pc_control_panel" value="Single Control Panel" data-price="0" class="validate"/>
                    Single Control Panel
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/cp/2.png"/><br/>
                    <input type="radio" name="pc_control_panel" value="Dual Control Panels" data-price="299.99" class="validate"/>
                    Dual Control Panels
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/cp/3.png"/><br/>
                    <input type="radio" name="pc_control_panel" value="Touch Screen Control" data-price="499.99" class="validate"/>
                    Touch Screen Control
                </label>             
                <label class="pc-n-radio">
                    <img src="https://infraredsaunaparts.com/calc/images/cp/5.png"/><br/>
                    <input type="checkbox" name="pc_control_panel_wifi" value="WI-FI Control Panels" data-price="399.99" class="validate"/>
                    WI-FI Control Panels
                </label>
            </div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about the control panel options, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
                <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step d-none wood-trim-heaters">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Wood Trim for Heaters</h3>
            <p class="description text-center">Select your wood trim type for heaters</p>
            <div class="pc-block pc-radio">
                <label>
                    <img src="/images/calculator/woodtypes/mybasswood.jpg"/><br/>
                    <input type="radio" name="pc_wood" value="Basswood Wood Trim" data-price="10"/>
                    Basswood Wood Trim
                </label>
                <label>
                    <img src="/images/calculator/woodtypes/myaspen.jpg"/><br/>
                    <input type="radio" name="pc_wood" value="Aspen Wood Trim" data-percent="25"/>
                    Aspen Wood Trim
                </label>
                <label>
                    <img src="/images/calculator/woodtypes/mycedar.jpg"/><br/>
                    <input type="radio" name="pc_wood" value="Cedar Wood Trim" data-percent="35"/>
                    Cedar Wood Trim
                </label>
                 <label>
                    <img src="/images/calculator/woodtypes/myhemlock.jpg"/><br/>
                    <input type="radio" name="pc_wood" value="Hemlock Wood Trim" data-percent="35"/>
                    Hemlock Wood Trim
                </label>
                 <label>
                    <img src="/images/calculator/woodtypes/mymahagany.jpg"/><br/>
                    <input type="radio" name="pc_wood" value="Mahogany Wood Trim" data-percent="35"/>
                    Mahogany Wood Trim
                </label>
            </div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about the wood trim for heaters, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
                <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Wood for Walls</h3>
            <p class="description text-center">Select your wood type for walls</p>
            <div class="pc-block pc-radio">
                     <label>
                    <img src="/images/calculator/woodtypes/BathwoodWall.jpg"/><br/>
                    <input type="radio" name="pc_wood_walls" value="Basswood Walls" data-price="10"/>
                    Basswood Walls
                </label>
                <label>
                    <img src="/images/calculator/woodtypes/AspenWall.jpg"/><br/>
                    <input type="radio" name="pc_wood_walls" value="Aspen Walls" data-price="10"/>
                    Aspen Walls
                </label>
        <label>
                    <img src="/images/calculator/woodtypes/HemlockWall.jpg"/><br/>
                    <input type="radio" name="pc_wood_walls" value="Hemlock Walls" data-price="10"/>
                    Hemlock Walls
                </label>
        <label>
                    <img src="/images/calculator/woodtypes/CedarWall.jpg"/><br/>
                    <input type="radio" name="pc_wood_walls" value=" Cedar Walls" data-price="10"/>
                    Cedar Walls
                </label>
        <label>
                    <img src="/images/calculator/woodtypes/MahaganyWall.jpg"/><br/>
                    <input type="radio" name="pc_wood_walls" value="Mahogany Walls" data-price="10"/>
                    Mahogany Walls
                </label>                
            </div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about the wood type for walls, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
                <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Insulation</h3>
            <p class="description text-center">
                Insulation is essential when building your own DIY Kit and for the purpose of protecting walls from direct heat of the heaters. Heaters should never touch the surface of the walls to avoid damaging sauna walls. Sauna walls and ceiling must be insulated and protected with a vapor barrier.
            </p>
            <div class="pc-block pc-radio">
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/option_default.png"/><br/>
                    <input type="radio" name="pc_isolation" value="None" data-price="0"/>
                    None
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/step5_img1.png"/><br/>
                    <input type="radio" name="pc_isolation" value="Insulation" data-percent="10"/>
                    Insulation
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/step5_img1.png"/><br/>
                    <input type="radio" name="pc_isolation" value="Radiant Barrier Foil" data-percent="10"/>
                    Radiant Barrier Foil
                </label>
            </div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about insulation or vapor barrier, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
               <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Lights and Lamps</h3>
            <p class="description text-center">
                Light assembly options allow you to have full control on how much lighting you want in your sauna. Light assembly comes with light bulbs and housing units to protect lights from direct heat inside the sauna.
            </p>
            <div class="pc-block pc-radio">
                <label>
                    <img class="img150" src="https://infraredsaunaparts.com/calc/images/step6_img1.png"/><br/>
                    Recessed Lights<br/>
                    <select class="pc-select-qty form-control my-3" data-title="Recessed Lights" data-price="69.99">
                        <option value="0">qty.</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <select class="pc-select-volts form-control"></select>
                </label>
                <label>
                    <img  class="img150" src="https://infraredsaunaparts.com/calc/images/step6_img2.png"/><br/>
                    Wall Mount<br/>
                    <select class="pc-select-qty form-control my-3" data-title="Wall Mount" data-price="89.99">
                        <option value="0">qty.</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="8">9</option>
                        <option value="10">10</option>
                    </select>
                    <select class="pc-select-volts form-control"></select>
                </label>
            </div>
            <div class="pc-helper-block">
                <div class="pc-helper">

                </div>
            </div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about lights and lamps, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
                <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Stereo System</h3>
            <p class="description text-center">Complete audio assembly options allow you to have full control of how many speakers is ideal for you to have in your sauna. Whether it is two or four, an audio system enhances the relaxation experience that you can have in your sauna.</p>
            <div class="pc-block pc-radio">
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/option_default.png"/><br/>
                    <input type="radio" name="pc_speakers" value="None" data-price="0"/>
                    None
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/step7_img1.png"/><br/>
                    <input type="radio" name="pc_speakers" value="AM / FM / CD" data-price="149.99"/>
                    AM / FM / CD
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/step7_img2.png"/><br/>
                    <input type="radio" name="pc_speakers" value="AM / FM / CD / MP3" data-price="199.99"/>
                    AM / FM / CD / MP3
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/step7_img3.png"/><br/>
                    <input type="radio" name="pc_speakers" value="AM / FM / CD / MP3 / AUX" data-price="249.99"/>
                    AM / FM / CD / MP3 / AUX
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/step7_img4.png"/><br/>
                    <input type="radio" name="pc_speakers" value="AM / FM / CD / MP3/ AUX / USB / SD" data-price="2999.99"/>
                    AM / FM / CD / MP3 / AUX /USB / SD
                </label>
            </div>
            <div class="pc-helper-block">
                <div class="pc-helper"></div>
            </div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about the stereo system, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
                <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Ionizers</h3>
            <p class="description text-center">
                An ionizer is an essential component when it comes to your DIY Kit. Ionizers allow the air to be interchanged and purified while you are enjoying your sauna. This is essential for the factors of the air inside to be healthier especially helping those who are suffering from asthma, allergies, and respiratory ailments.
            </p>
            <div class="pc-block pc-radio">
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/option_default.png"/><br/>
                    <input type="radio" name="pc_ionizer" value="None" data-price="0"/>
                    None
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/DSC_0092.jpg"/><br/>
                    <input type="radio" name="pc_ionizer" value="Ionizer-Silver Oval" data-price="149.99"/>
                    Ionizer-Silver Oval
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/IMG_4325_vn3j-28.jpg"/><br/>
                    <input type="radio" name="pc_ionizer" value="Ionizer-Blue Oval" data-price="149.99"/>
                    Ionizer-Blue Oval
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/IMG_4322.jpg"/><br/>
                    <input type="radio" name="pc_ionizer" value="Ionizer-Gold Oval" data-price="149.99"/>
                    Ionizer-Gold Oval
                </label>
            </div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about ionizers, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
                <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Chromotherapy</h3>
            <p class="description text-center">
                Chromotherapy, also known as "Light Therapy" is an alternative medicine method that is for the purpose of balancing out the levels of energy in your body. No matter whether the imbalance is on a physical, emotional, spiritual, or mental level.
            </p>
            <div class="pc-block pc-radio">
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/option_default.png"/><br/>
                    <input type="radio" name="pc_chromotherapy" value="none" data-price="0"/>
                    None
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/IMG_4200.jpg"/><br/>
                    <input type="radio" name="pc_chromotherapy" value="Chromotherapy Bulb " data-price="199.99"/>
                    Chromotherapy Bulb
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/IMG_2083.jpg"/><br/>
                    <input type="radio" name="pc_chromotherapy" value="Chromotherapy LED" data-price="249.99"/>
                    Chromotherapy LED
                </label>
                <label>
                    <img src="https://infraredsaunaparts.com/calc/images/IMG_1012.jpg"/><br/>
                    <input type="radio" name="pc_chromotherapy" value="Medical Grade Chromotherapy Lightning" data-price="399.99"/>
                    Medical Grade Chromotherapy Lightning
                </label>
            </div>
            <div class="pc-note-block">
                <label class="pc-note-desc">If you want to add any additional information about chromotherapy options, please do it here.</label>
                <textarea data-note class="form-control mt-3" placeholder="Note"></textarea>
            </div>
            <div class="step-actions">
                <button class="btn btn-primary next-step">Continue</button>
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
    <li class="step last-step">
        <div class="step-title waves-effect waves-dark">Step <span class="number"></span></div>
        <div class="step-content">
            <h3>Finish</h3>
            <span id="pc_finish"></span>
            <div class="row">
                <div class="col-lg-8">
                    <div class="pc-result-msg"></div>
                </div>
                <div class="col-lg-4">
                    @include('forms.form', ['form_id' => 2])
                </div>
            </div>
            <div class="step-actions">
                <button class="btn btn-outline-secondary previous-step">Back</button>
            </div>
        </div>
    </li>
</ul>
<style type="text/css">
    header, .breadcrumb, footer{
        display: none;
    }
</style>