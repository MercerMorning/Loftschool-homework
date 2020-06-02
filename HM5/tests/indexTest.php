<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class BasicRateTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            BasicRate::class,
            BasicRate::sum('user@example.com')
        );
    }
}