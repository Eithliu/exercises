<?php

function displaySocials() {
    
    $facebook = 'https://facebook.com';
    $instagram = 'https://instagram.com';
    $linkedIn = 'https://www.linkedin.com';
    $gitHub = 'https://github.com/honoagency';

    $listeBalise = '
        <ul>
            <li>
                <a href ="' . $facebook . '">Facebook</a>
            </li>
            <li>
                <a href="' . $instagram . '">Instagram</a>
            </li>
            <li>
                <a href ="' . $linkedIn . '">LinkedIn</a>
            </li>
            <li>
                <a href="' . $gitHub . '">GitHub</a>
            </li>
        </ul>';

    return $listeBalise;

}


add_shortcode('show_social_network', 'displaySocials');