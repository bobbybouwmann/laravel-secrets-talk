<?php

namespace App\Listeners;

use Illuminate\Console\Events\CommandStarting;

final class AddLogoToOutput
{
    public function handle(CommandStarting $event): void
    {
        $event->output->write('
  _                              _   ____                     _
 | |    __ _ _ __ __ ___   _____| | / ___|  ___  ___ _ __ ___| |_ ___
 | |   / _` | \'__/ _` \ \ / / _ \ | \___ \ / _ \/ __| \'__/ _ \ __/ __|
 | |__| (_| | | | (_| |\ V /  __/ |  ___) |  __/ (__| | |  __/ |_\__ \
 |_____\__,_|_|  \__,_| \_/ \___|_| |____/ \___|\___|_|  \___|\__|___/

');
    }
}
