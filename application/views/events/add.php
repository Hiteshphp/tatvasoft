<div class="row">
    <h3>Add Event</h3>
</div>
<div class="row">
    <?php echo form_open(base_url() . $this->router->class . '/' . $this->router->method, array('class' => 'event_form', 'id' => 'event_form_id', 'name' => 'event_form')); ?>
    <div class="col-md-6">
        <div class="form-group">
            <label>Event Title</label>
            <input type="text" name="data[title]" class="form-control" id="title" placeholder="Event Title"/>
        </div>
        <div class="form-group">
            <label>Start Date</label>
            <input type="text" name="data[start_date]" class="form-control" id="start_date" placeholder="Event Start Date"/>
        </div>
        <div class="form-group">
            <label>End Date</label>
            <input type="text" name="data[end_date]" class="form-control" id="end_date" placeholder="Event End Date"/>
        </div>
        <div class="form-group">
            <table>
                <tr>
                    <td><label>Recurrence:</label> 
                    </td>
                    <td>
                        <input id="Radiobutton2" name="data[RepeatGroup]" tabindex="9" type="radio" value="Radiobutton2" />
                        <label for="Radiobutton2"><span style="font-size: 10pt; font-family: Verdana">Repeat</span></label>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <select id="lstRepeatType" class="textbox-medium" name="data[lstRepeatType]" tabindex="10">
                            <option selected="selected" value="Every">Every</option>
                            <option value="Every Other">Every Other</option>
                            <option value="Every Third">Every Third</option>
                            <option value="Every Fourth">Every Fourth</option>
                        </select>
                        <select id="lstEvery" class="textbox-medium" name="data[lstEvery]" tabindex="10">
                            <option selected="selected" value="Day">Day</option>
                            <option value="Week">Week</option>
                            <option value="Month">Month</option>
                            <option value="Year">Year</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input id="RadioButton3" tabIndex=11 type=radio value="RadioButton3" name="data[RepeatGroup]" />
                        <span style="font-size: 10pt; font-family: Verdana">Repeat on the
                            <select id="lstRepeatOn" class="textbox-middle" name="data[lstRepeatOn]" tabindex="12">
                                <option selected="selected" value="First">First</option>
                                <option value="Second">Second</option>
                                <option value="Third">Third</option>
                                <option value="Fourth">Fourth</option>
                            </select>
                        </span>&nbsp;
                        <select id="lstRepeatWeek" class="textbox-middle" name="data[lstRepeatWeek]" tabindex="13">
                            <option selected="selected" value="Sunday">Sun</option>
                            <option value="Monday">Mon</option>
                            <option value="Tuesday">Tue</option>
                            <option value="Wednesday">Wed</option>
                            <option value="Thursday">Thu</option>
                            <option value="Friday">Fri</option>
                            <option value="Saturday">Sat</option>
                        </select>
                        of the
                        <select id="lstRepeatMonth" class="textbox-middle" language="javascript" name="data[lstRepeatMonth]" tabindex="14">
                            <option selected="selected" value="Month">Month</option>
                            <option value="3 Months">3 Months</option>
                            <option value="4 Months">4 Months</option>
                            <option value="6 Months">6 Months</option>
                            <option value="Year">Year</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>

        <div class="form-group">
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo base_url() . $this->router->class; ?>"<button class="btn btn-success">Cancel</button></a>
        </div>

    </div>
</div>
<script>
    jQuery('document').ready(function(){
        jQuery('#start_date').datepicker({dateFormat: 'dd-mm-yy'});
        jQuery('#end_date').datepicker({dateFormat: 'dd-mm-yy'});
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>