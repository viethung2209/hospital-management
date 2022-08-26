<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form">
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <label>
                        <input type="text" class="form-control" placeholder="Full name">
                    </label>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <label>
                        <input type="text" class="form-control" placeholder="Email address..">
                    </label>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label>
                        <input type="date" class="form-control">
                    </label>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <label for="departement"></label><select name="departement" id="departement" class="custom-select">
                        <option value="general">General Health</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="dental">Dental</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopaedics">Orthopaedics</option>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <label>
                        <input type="text" class="form-control" placeholder="Number..">
                    </label>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <label for="message"></label><textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->
<?php /**PATH D:\laragon\www\hospital-management\resources\views/user/appointment.blade.php ENDPATH**/ ?>