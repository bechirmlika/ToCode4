OkHttpClient client = new OkHttpClient().newBuilder()
  .build();
Request request = new Request.Builder()
  .url("https://covid19-api.org/api/status/UA?date=2020-03-25")
  .method("GET", null)
  .build();
Response response = client.newCall(request).execute();