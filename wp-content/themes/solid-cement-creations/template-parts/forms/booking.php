<?php
/**
 * Booking form snippet displayed throughout the theme.
 *
 * @package SolidCement
 */
?>
<form class="booking-form" method="post" action="#">
    <div class="form-control">
        <label for="booking-name">Name</label>
        <input type="text" id="booking-name" name="booking_name" required />
    </div>
    <div class="form-control">
        <label for="booking-phone">Phone</label>
        <input type="tel" id="booking-phone" name="booking_phone" required />
    </div>
    <div class="form-control">
        <label for="booking-job">Job Type</label>
        <select id="booking-job" name="booking_job" required>
            <option value="">Select a service</option>
            <option value="gnome-world">Gnome World</option>
            <option value="fairy-garden">Fairy Garden</option>
            <option value="garden-design">Garden Design</option>
            <option value="restoration">Restoration</option>
        </select>
    </div>
    <button type="submit" class="btn">Request a Quote</button>
</form>
