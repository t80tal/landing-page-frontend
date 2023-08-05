<?php
function getFooterLinks($title, $links)
{
    ?>
    <div class="footer-links">
        <h1 class="footer-links-title">
            <?php echo $title ?>
        </h1>
        <ul class="footer-links-list">
            <?php foreach ($links as $link): ?>
                <li class="footer-link">
                    <?php echo $link ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
}
function getFooter()
{
    ?>
    <footer>
        <div class="footer-left">
            <?php getFooterLinks("About Us", array('Company', 'Contact', 'Careers', 'Affiliates', 'Stores')) ?>
            <?php getFooterLinks("Useful Links", array('Useful Links', 'Support', 'Refund', 'FAQ', 'Feedback')) ?>
        </div>
        <div class="footer-right">
            <div>
                <h1 class="footer-title">Subscribe to our newsletter!</h1>
                <div class="footer-email-field">
                    <input type="text" placeholder="example@domain.com" class="footer-input">
                    <button class="footer-button">Join!</button>
                </div>
            </div>
            <div>
                <span class="footer-copyrights">All rights reserved. 2022.</span>
            </div>
        </div>
    </footer>
<?php
}
?>