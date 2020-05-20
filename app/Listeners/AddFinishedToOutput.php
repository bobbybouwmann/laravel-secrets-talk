<?php

namespace App\Listeners;

use Illuminate\Console\Events\CommandFinished;
use Spatie\Emoji\Emoji;

final class AddFinishedToOutput
{
    public const MESSAGES = [
        'Thank you for using Laravel! :glowingStar',
        'Time for a break! :hotBeverage',
        'Want to learn more? Sign up at laravelsecrets.com :rocket',
    ];

    public function handle(CommandFinished $event): void
    {
        $message = $this->getRandomMessage();

        $event->output->writeln('');
        $event->output->writeln($message);
    }

    private function getRandomMessage(): string
    {
        $message = collect(self::MESSAGES)->random(1)->first();

        preg_match('/([^\:]+$)/', $message, $emoji);

        $emoji = Emoji::{$emoji[0]}();

        return preg_replace('/(?=\:).*/', $emoji, $message);
    }
}
