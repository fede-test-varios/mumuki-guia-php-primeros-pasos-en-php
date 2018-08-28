public function testTrueEsTrue(): void {
  $this->assertEquals(
    (new Foo())->bar(), 
    (new Bar())->bar()
  );
}