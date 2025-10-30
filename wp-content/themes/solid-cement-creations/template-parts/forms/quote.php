<?php
/**
 * Detailed quote form for service pages.
 *
 * @package SolidCement
 */
?>
<form class="contact-card" method="post" action="#">
    <div class="form-control">
        <label for="quote-name">Full Name</label>
        <input type="text" id="quote-name" name="quote_name" required />
    </div>
    <div class="form-control">
        <label for="quote-email">Email</label>
        <input type="email" id="quote-email" name="quote_email" required />
    </div>
    <div class="form-control">
        <label for="quote-phone">Phone</label>
        <input type="tel" id="quote-phone" name="quote_phone" required />
    </div>
    <div class="form-control">
        <label for="quote-service">Service Interested In</label>
        <select id="quote-service" name="quote_service" required>
            <option value="">Choose a service</option>
            <option value="gnome-world">Custom Gnome</option>
            <option value="fairy-garden">Fairy Garden Installation</option>
            <option value="garden-design">Garden Design</option>
            <option value="restoration">Restoration</option>
        </select>
    </div>
    <div class="form-control form-control--inline">
        <span class="form-label">Project Focus</span>
        <label class="chip">
            <input type="checkbox" name="quote_focus[]" value="lighting" />
            <span>Garden Lighting</span>
        </label>
        <label class="chip">
            <input type="checkbox" name="quote_focus[]" value="water" />
            <span>Water Features</span>
        </label>
        <label class="chip">
            <input type="checkbox" name="quote_focus[]" value="sculptures" />
            <span>Signature Sculptures</span>
        </label>
        <label class="chip">
            <input type="checkbox" name="quote_focus[]" value="planting" />
            <span>Planting Design</span>
        </label>
    </div>
    <div class="form-control">
        <label for="quote-budget">Budget Range</label>
        <select id="quote-budget" name="quote_budget">
            <option value="starter">$2,500 – $5,000</option>
            <option value="premium" selected>$5,000 – $12,000</option>
            <option value="signature">$12,000 – $25,000</option>
            <option value="grand">$25,000+</option>
        </select>
    </div>
    <div class="form-control">
        <label for="quote-timeline">Ideal Installation Timeline</label>
        <input type="date" id="quote-timeline" name="quote_timeline" />
    </div>
    <div class="form-control">
        <label for="quote-notes">Project Details</label>
        <textarea id="quote-notes" name="quote_notes" placeholder="Share your vision"></textarea>
    </div>
    <div class="form-control form-control--inline">
        <label class="toggle">
            <input type="checkbox" name="quote_news" value="1" checked />
            <span>Send me seasonal styling guides and cement garden decor tips.</span>
        </label>
    </div>
    <button type="submit" class="btn">Submit Request</button>
</form>
