<?php

function getStatusColor($status)
{
    switch ($status) {
        case 'Pending':
            return 'orange';
        case 'Processing':
            return 'blue';
        case 'Completed':
            return 'green';
        default:
            return 'black';
    }
}
