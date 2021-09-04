<?php


class FeatureTest extends TestCase
{
    public function testGetFeatureRequiredParams()
    {
        $this->json('GET', '/feature')
            ->seeStatusCode(422)
            ->seeJson([
                "email" => ["The email field is required."],
                "featureName" => ["The feature name field is required."]
            ]);
    }

    public function testGetFeature()
    {
        $this->json('GET', '/feature?email=example@example.test&featureName=example-feature')
            ->seeStatusCode(200)
            ->seeJson([
                'canAccess' => false
            ]);
    }

    public function testUpdateToggleFeatureRequiredParams()
    {
        $this->json('POST', '/feature')
            ->seeStatusCode(422)
            ->seeJson([
                "email" => ["The email field is required."],
                "featureName" => ["The feature name field is required."],
                "enable" => ["The enable field is required."],
            ]);
    }

    public function testUpdateToggleFeature()
    {
        $response = $this->json('POST', '/feature', [
            "email" => "example@example.test",
            "featureName" => "example-feature",
            "enable" => true
        ]);

        $response->expectOutputString('');
        $response->assertResponseStatus(200);

        $responseFail = $this->json('POST', '/feature', [
            "email" => "exampleemailnotexists@example.test",
            "featureName" => "example-feature",
            "enable" => true
        ]);

        $responseFail->expectOutputString('');
        $responseFail->assertResponseStatus(304);
    }
}
