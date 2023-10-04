import { Component } from '@angular/core';
import { AngularEditorConfig } from '@kolkov/angular-editor';
import { routes } from 'src/app/core/core.index';

@Component({
  selector: 'app-add-products',
  templateUrl: './add-products.component.html',
  styleUrls: ['./add-products.component.scss']
})
export class AddProductsComponent {
  files: File[] = [];
  public routes = routes;
  nation = 'units';
  Discount='select Discount'
  Tax='tax'
 
  config: AngularEditorConfig = {
    editable: true,
    spellcheck: true,
    sanitize: false,
    height: '15rem',
    minHeight: '5rem',
    placeholder: 'Enter text here...',
    translate: 'no',
    defaultParagraphSeparator: 'p',
    defaultFontName: 'Arial',
    toolbarHiddenButtons: [['bold']],
    customClasses: [
      {
        name: 'quote',
        class: 'quote',
      },
      {
        name: 'redText',
        class: 'redText',
      },
      {
        name: 'titleText',
        class: 'titleText',
        tag: 'h1',
      },
    ],
  };
  onSelect(event: { addedFiles: File[] }) {
    this.files.push(...event.addedFiles);
  }
  onRemove(event:File) {
   this.files.splice(this.files.indexOf(event), 1);
  }


}
