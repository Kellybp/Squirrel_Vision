class Video extends Component {
  render() {
    return (
      <div className="container">
        <video id="expandedImg" width="100%" height="100%" controls="controls">
          <source id="source" src="" type="video/mp4" />
        </video>
        <div id="videoText"></div>
      </div>
    );
  }
}

export default Video;
