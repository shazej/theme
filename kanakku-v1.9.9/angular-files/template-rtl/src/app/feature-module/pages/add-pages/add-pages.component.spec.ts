import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddPagesComponent } from './add-pages.component';

describe('AddPagesComponent', () => {
  let component: AddPagesComponent;
  let fixture: ComponentFixture<AddPagesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddPagesComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddPagesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
