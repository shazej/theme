import { Component} from '@angular/core';

@Component({
  selector: 'app-popover',
  templateUrl: './popover.component.html',
  styleUrls: ['./popover.component.scss'],
})
export class PopoverComponent {
  popoverOne = false;
  content =
    "And here's some amazing content. It's very engaging. Right?";

}
