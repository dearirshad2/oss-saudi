<div id="registerDialogContainer">
    <div id="registerDialog" title="Register for Updates">
        <form id="registerForm" class="two-col">

            <div class="row">
                <div class="field">
                    <label>Prefix (Optional)</label>
                    <select id="mce-PREFIX">
                        <option value="">Select Prefix</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Eng.">Eng.</option>
                        <option value="Prof.">Prof.</option>
                    </select>
                </div>

                <div class="field">
                    <label>First Name</label>
                    <input type="text" id="mce-FNAME" required>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" id="mce-LNAME" required>
                </div>

                <div class="field">
                    <label>Gender</label>
                    <select id="mce-GENDER" required>
                        <option value="">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Organization</label>
                    <input type="text" id="mce-ORG" required>
                </div>

                <div class="field">
                    <label>Organization Type</label>
                    <select id="mce-ORGTYPE" required>
                        <option value="">Select type</option>
                        <option value="Government">Government</option>
                        <option value="Private Sector">Private Sector</option>
                        <option value="Non-Profit">Non-Profit</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Job Title</label>
                    <input type="text" id="mce-JOB" required>
                </div>

                <div class="field">
                    <label>Email</label>
                    <input type="email" id="mce-EMAIL" required>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Mobile Number</label>
                    <input type="tel" id="mce-PHONE" maxlength="15" required>
                </div>

                <div class="field">
                    <label>Parmg Member</label>
                    <select id="mce-PARMG" required>
                        <option value="">Select option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>

            <div class="row full">
                <button id="submit-button" class="site-button">Submit</button>
            </div>

        </form>
    </div>
</div>
