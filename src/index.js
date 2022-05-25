import { registerPlugin } from "@wordpress/plugins";
import { select, dispatch } from "@wordpress/data";

registerPlugin("disable-welcome-guide", {
  render: function () {
    if (select("core/edit-post").isFeatureActive("welcomeGuide")) {
      dispatch("core/edit-post").toggleFeature("welcomeGuide");
    }
    return true;
  },
});
