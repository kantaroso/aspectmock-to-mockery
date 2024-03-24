<?php
namespace MockeryTest\test;

use Mockery as m;
use PHPUnit\Framework\TestCase;

/**
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class EventScheduler_Test extends TestCase {
    protected function tearDown(): void {
        m::close();
    }

    public function testScheduleEventInThePast() {
        m::mock('alias:\MockeryTest\lib\TimeUtils')
            ->shouldReceive('isPastStatic')
            ->andReturn(true);

        $scheduler = new \MockeryTest\lib\EventScheduler();
        $result = $scheduler->scheduleEventUseStatic(time() + 3600); // 1時間後
        $this->assertEquals('Event cannot be scheduled in the past.', $result);
    }

    public function testScheduleEventInTheFuture() {
        m::mock('overload:\MockeryTest\lib\TimeUtils')
            ->shouldReceive('isPast')
            ->andReturn(false);

        $scheduler = new \MockeryTest\lib\EventScheduler();
        $result = $scheduler->scheduleEvent(time() - 3600); // 1時間前
        $this->assertEquals('Event scheduled successfully.', $result);
    }

    public function testScheduleEventInThePastWithTimezone() {
        m::mock('overload:\MockeryTest\lib\TimeUtils','\MockeryTest\test\tmp_TimeUtils')
            ->shouldReceive('isPastByTimeZone')
            ->andReturn(false);

        $scheduler = new \MockeryTest\lib\EventScheduler();
        $result = $scheduler->scheduleEventWithTimezone(time() - 3600); // 1時間前
        $this->assertEquals('Event scheduled successfully.', $result);
    }
}

class tmp_TimeUtils
{
    const TIME_ZONE_TOKYO='Asia/Tokyo';
    const TIME_ZONE_UTC='UTC';
}
