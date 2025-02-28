<!DOCTYPE html>
<html>
<head>
    <title>Page Not Found</title>
</head>
<body>
<style>
*{
    padding:0px;
    margin:0px;
}.error {
  text-align: center;
  padding: 16px;
  position: relative;
}h1 {
  margin: -10px 0 -30px;
  font-size: calc(17vw + 40px);
  opacity: .8;
  letter-spacing: -17px;
  font-family: poppins;
  color: #cbcbcb;
}p {
  font-size: 20px;
  margin: 8px 0 38px 0;
  font-weight: bold;
  font-family: monospace;
}a {
    cursor: pointer;
    transition: all 0.4s;
    background: #6e0d16;
    color: #fff;
    font-weight: 600;
    font-size: 16px;
    border-radius: 30px;
    padding: 12px 30px;
    margin-bottom: 10px;
    border: 0px;
    font-family: poppins;
}
</style>
    <div class="404-error-page" style="background: #f5f5f5;height: 100vh;">
        <div class="error">
          <h1>404</h1>
          <p>We're sorry but it looks like that page doesn't exist anymore.</p>
          <a href="{{ route('/') }}">Back to Home</a>
          </div>
    </div>

</body>
</html>